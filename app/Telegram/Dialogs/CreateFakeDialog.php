<?php

namespace App\Telegram\Dialogs;

use App\Models\Category;
use App\Models\Country;
use App\Models\Fake;
use App\Models\TelegramUser;
use App\Telegram\Commands\GetFakeCommand;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Log;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Objects\Update;
use Throwable;

class CreateFakeDialog extends Dialog
{
    protected $steps = [
        'selectCountry',
        'selectCategory',
        'setCategory',
        ['name' => 'useParsing', 'is_dich' => true],
        'setTitle',
        'setPrice',
        'setImage',
        'setRecipient',
        'setAddress',
        ['name' => 'useDefault', 'is_dich' => true]
    ];

    protected $btns;

    /**
     * @var Collection|mixed|null
     */
    public $default;

    public function __construct(Update $update, TelegramUser $user)
    {
        $this->aliases['no'][] = 'ручное создание';
        $this->btns = $this->getConfig('btns');
        $this->default = $user->getSettings('default');
        parent::__construct($update, $user);
    }

    public function selectCountry()
    {
        try {
            $countries = Country::whereHas('categories')->get();
            $text = $this->makeText([
                "🌐 <b>Выберите страну</b>"
            ]);
            $countryBtns = $countries->map(function (Country $country) {
                $flag = $country->flag ?? Country::flag(Country::POLAND);
                $name = Str::ucfirst($country->name);
                return ["text" => "$flag $name"];
            });
            $keyboard = [];
            foreach ($countryBtns->chunk(1)->toArray() as $item) $keyboard[] = array_values($item);
            $keyboard[] = [["text" => $this->btns->get('back') ?? '']];
            $this->telegram->sendMessage([
                "chat_id" => $this->getChat()->getId(),
                "text" => $text,
                "parse_mode" => "html",
                "reply_markup" => Keyboard::make([
                    "keyboard" => $keyboard,
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ])
            ]);
        } catch (TelegramSDKException|Throwable $e) {
            Log::error($e->getMessage());
        }
    }

    public function selectCategory()
    {
        try {
            $country_id = $this->getData('country_id');
            if (!($this->isBack() || $this->getData('error'))) {
                $this->setData('category_id');
                [$flag, $name] = array_pad(explode(' ', Str::lower(trim(strip_tags($this->update->getMessage()->getText())))), 2, null);
                if (is_null($name)) {
                    $name = $flag;
                    $flag = Country::flag(Country::POLAND);
                }
                $country = Country::byFlag($flag)->first();
                $country_id = optional($country)->id;
                $this->setData('country_id', $country_id);
            }

            $categories = Category::with(['country'])->where('country_id', $country_id)->get();
            $categoryNames = $categories->unique('name')->pluck(['name'])->map(function ($name) {
                return Str::ucfirst($name);
            });
            $text = $this->makeText([
                "📝 <b>Выбор сервиса для создания</b>",
                "",
                "❕ <i>Вы можете создать ссылки на <b>{$categoryNames->implode('/')}</b>, выберите нужный сервис.</i>"
            ]);
            $categoryBtns = $categories->map(function (Category $category) {
                $flag = $category->country->flag ?? Country::flag(Country::POLAND);
                $name = Str::ucfirst($category->name);
                return ["text" => "$flag $name"];
            });
            $keyboard = [];
            foreach ($categoryBtns->chunk(3)->toArray() as $item) $keyboard[] = array_values($item);
            $keyboard[] = [["text" => $this->btns->get('back') ?? '']];
            $this->telegram->sendMessage([
                "chat_id" => $this->getChat()->getId(),
                "text" => $text,
                "parse_mode" => "html",
                "reply_markup" => Keyboard::make([
                    "keyboard" => $keyboard,
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ])
            ]);
        } catch (TelegramSDKException|Throwable $e) {
            Log::error($e->getMessage());
        }
    }

    public function setCategory()
    {
        try {
            [$flag, $name] = array_pad(explode(' ', Str::lower(trim(strip_tags($this->update->getMessage()->getText())))), 2, null);
            if (is_null($name)) {
                $name = $flag;
                $flag = Country::flag(Country::POLAND);
            }
            $country = Country::byFlag($flag)->first();
            $category = Category::whereName($name)->where('country_id', $country->id ?? null)->first();
            if (is_null($category) && $category_id = $this->getData('category_id')) {
                $category = Category::whereId($category_id)->first();
            }
            if (!is_null($category)) {
                $this->setData('category_id', $category->id);
                $this->setData('error', false);
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [["text" => "Ручное создание"]],
                        [["text" => $this->btns->get('back') ?? '']]
                    ],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);
                $this->telegram->sendMessage([
                    "chat_id" => $this->getChat()->getId(),
                    "text" => '🖋️ <b>Напишите ссылку для парсинга</b>',
                    "parse_mode" => "html",
                    "reply_markup" => $keyboard
                ]);
            } else {
                $this->setData('error', true);
                $keyboard = Keyboard::make([
                    "keyboard" => [[["text" => $this->btns->get('back') ?? '']]],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);
                $this->telegram->sendMessage([
                    "chat_id" => $this->getChat()->getId(),
                    "text" => "❗️ <i>️Выберите из списка</i>",
                    "parse_mode" => "html",
                    "reply_markup" => $keyboard
                ]);
                $this->jump('selectCategory');
                $this->proceed();
            }
        } catch (TelegramSDKException|Throwable $e) {
            Log::error($e->getMessage());
        }
    }

    public function useParsing()
    {
        try {
            $text = [];
            if ($this->isBack() || $this->getData('error')) {
                $this->no = $this->getData('parsing') !== true;
            }
            $this->setData('parsing', !(bool)$this->no);
            $this->setData('error', false);
            if ($this->no) {
                $text[] = '🖋 <b>Введите название товара</b>';
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [["text" => $this->getData("title") ?? '']],
                        [["text" => $this->btns->get('back') ?? '']],
                    ],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);
                $this->jump('setTitle');
            } else {
                $url = trim($this->update->getMessage()->getText());
                $category = Category::whereId($this->getData('category_id'))->first();
                foreach ($category->parse($url) as $key => $value) {
                    if (!is_null($value)) $this->setData($key, $value);
                }
                $data = collect($this->getData()->only(['price', 'title', 'img'])->toArray())->filter(function ($value) {
                    return !is_null($value);
                });
                if ($data->count() === 3) {
                    $text[] = $this->isBack() ? "" : "💾 <b>Данные успешно получены</b>";
                    $text[] = "";
                    if (is_null($this->default)) {
                        $text[] = "🖋 <b>Введите имя и фамилию получателя</b>";
                        $keyboard = Keyboard::make([
                            "keyboard" => [[["text" => $this->btns->get('back') ?? '']]],
                            "resize_keyboard" => true,
                            "one_time_keyboard" => false,
                        ]);
                        if (!$this->isBack()) $this->jump('setRecipient');
                    } else {
                        $this->setData('recipient', $this->default->get('recipient') ?? null);
                        $this->setData('address', $this->default->get('address') ?? null);
                        $this->create();
                    }
                } else {
                    $this->setData('parsing', false);
                    $text[] = "❗️ <i>Не получилось спарсить, попробуйте написать в ручном режиме</i>";
                    $text[] = "";
                    $text[] = "🖋 <b>Введите название товара</b>";
                    $keyboard = Keyboard::make([
                        "keyboard" => [
                            [["text" => $this->getData('title') ?? '']],
                            [["text" => $this->btns->get('back') ?? '']],
                        ],
                        "resize_keyboard" => true,
                        "one_time_keyboard" => false,
                    ]);
                }
            }
            if (!$this->isEnd()) $this->telegram->sendMessage([
                'chat_id' => $this->getChat()->getId(),
                'text' => $this->makeText($text),
                "parse_mode" => "html",
                "reply_markup" => $keyboard ?? Keyboard::make([
                        "keyboard" => [
                            [["text" => $this->getData('back') ?? '']]
                        ],
                        "resize_keyboard" => true,
                        "one_time_keyboard" => false,
                    ])
            ]);
        } catch (Exception|Throwable $exception) {
            Log::error($exception->getMessage());
        }
    }


    public function setTitle()
    {
        try {
            $title = $this->isBack() || $this->getData('error')
                ? $this->getData('title') ?? ''
                : trim($this->update->getMessage()->getText());

            if (!empty($title)) {
                $this->setData('title', $title);
                $this->setData('error', false);
                $text = $this->makeText([
                    "🖋 <b>Введите стоимость товара</b>",
                ]);
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [["text" => $this->getData('price') ?? '']],
                        [["text" => $this->btns->get('back') ?? '']],
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
                $this->jump('useParsing');
                $this->proceed();
            }
        } catch (TelegramSDKException|Throwable $e) {
        }
    }

    public function setPrice()
    {
        try {
            $img = $this->getData('img');
            if (!is_null($img) && file_exists($img)) {
                $this->setData('img');
                unlink($img);
            }
            $price = $this->isBack() || $this->getData('error')
                ? $this->getData('price') ?? ''
                : trim($this->update->getMessage()->getText());

            if (!empty($price) && is_numeric($price) && (int)$price > 0) {
                $this->setData('price', $price);
                $this->setData('error', false);
                $text = $this->makeText([
                    "🖋 <b>Введите ссылку на изображение товара</b>",
                    "",
                    "❕ <i>Формат: <code>https://example.com/image.png</code> (главное прямой путь к картинке с форматом)</i>"
                ]);
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [["text" => $this->getData('img') ?? '']],
                        [["text" => $this->btns->get('back') ?? '']],
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
                    'text' => "❗️ <i>Стоимость товара надо писать в цифрах</i>",
                    "parse_mode" => "html",
                ]);
                $this->jump('setTitle');
                $this->proceed();
            }
        } catch (Throwable $exception) {
            Log::error($exception->getMessage());
        }
    }

    public function setImage()
    {
        try {
            $telegram = $this->telegram;
            $update = $this->update;
            $message = $update->getMessage();
            $image = $this->isBack() || $this->getData('error')
                ? $this->getData('img') ?? ''
                : trim($update->getMessage()->getText());
            if ($message !== null) {
                $error = false;
                $file_id = null;
                $size = 0;
                $ext = 'jpg';
                if ($message->has('photo')) {
                    $photo = $message->photo[0];
                    $file_id = $photo['file_id'];
                    $size = $photo['file_size'];
                } elseif ($message->has('document')) {
                    $document = $message->document;
                    $size = $document->fileSize;
                    if ($ext = array_search($document->mimeType, ['gif' => 'image/gif', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpg', 'png' => 'image/png', 'svg' => 'image/svg+xml'], true)) {
                        $file_id = $document['file_id'];
                    } else $error = "❗️ <i>Допустимые расширения gif,jpg,png,svg</i>";
                }
                if ($size > 5e+6) {
                    $error = "❗️ <i>Размер файла не должен превышать 5 мб</i>";
                }
                if ($error) {
                    $this->telegram->sendMessage([
                        'chat_id' => $this->getChat()->getId(),
                        'text' => $error,
                        "parse_mode" => "html"
                    ]);
                    $this->setData('error', true);
                    $this->jump('setPrice');
                    $this->proceed();
                    return;
                } elseif (!is_null($file_id)) {
                    $file = $telegram->getFile(['file_id' => $file_id]);
                    $image = $this->downloadFile($file->filePath, $ext);
                }
            }
            if (!empty($image) && (filter_var($image, FILTER_VALIDATE_URL) || file_exists($image))) {
                if ($image !== $this->getData('img') && file_exists($this->getData('img'))) {
                    unlink($this->getData('img'));
                }
                $this->setData('img', $image);

                if (is_null($this->default) || (($this->isBack() || $this->getData('error')) && !$this->getData('default'))) {
                    $text = "🖋 <b>Введите имя и фамилию получателя</b>";
                    $keyboard = Keyboard::make([
                        "keyboard" => [
                            [["text" => $this->getData('recipient') ?? '']],
                            [["text" => $this->btns->get('back') ?? '']],
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

                    $this->setData('recipient', $this->default->get('recipient') ?? null);
                    $this->setData('address', $this->default->get('address') ?? null);
                    $this->create();
                }
                $this->setData('error', false);

            } else {
                $this->setData('error', true);
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>Укажите правильную ссылку</i>",
                    "parse_mode" => "html"
                ]);
                $this->jump('setPrice');
                $this->proceed();
            }
        } catch (Throwable $e) {
        }
    }


    public function setRecipient()
    {
        try {
            if (!$this->getData('error')) {
                if ($this->isBack() && $this->getData('parsing') === true) {
                    $this->jump('setCategory');
                    $this->proceed();
                    return;
                } elseif ($this->isBack() && $this->getData('parsing') === false && !is_null($this->default)) {
                    $this->jump('setPrice');
                    $this->proceed();
                    return;
                }
            }
            $recipient = $this->isBack() || $this->getData('error')
                ? $this->getData('recipient') ?? ''
                : trim($this->update->getMessage()->getText());

            $defaultAddress = !is_null($this->default) ? ($this->default->get('address') ?? '') : '';
            list($fname, $lname) = array_pad(explode(' ', $recipient), 2, null);
            if (!empty($recipient) && !(is_null($fname) || is_null($lname))) {
                $this->setData('error', false);
                $this->setData('recipient', $recipient);
                $text = $this->makeText([
                    "🖋 <b>Введите полный адрес получателя</b>",
                    "",
                    "❕ <i>Пример: 00-001, г. Warsaw, ul. Kurwa, d. 2</i>"
                ]);
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [
                            ["text" => $this->getData('address') ?? $defaultAddress],
                        ],
                        [
                            ["text" => $this->btns->get('back') ?? ''],
                        ],
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
                $text = "Не указано ";
                $text .= is_null($fname) ? "имя" : "фамилия";
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>$text</i>",
                    "parse_mode" => "html",
                ]);
                $this->jump('setImage');
                $this->proceed();
            }
        } catch (Throwable $e) {
        }
    }

    public function setAddress()
    {
        try {
            $address = $this->isBack() || $this->getData('error')
                ? $this->getData('address') ?? ''
                : trim($this->update->getMessage()->getText());

            if ((!empty($address) && strlen($address) > 4)) {
                $this->setData('address', $address);
                $this->setData('error', false);
                $this->create();
            } else {
                $this->setData('error', true);
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>Адрес указан неправильно</i>",
                    "parse_mode" => "html",
                ]);
                $this->jump('setRecipient');
                $this->proceed();
            }
        } catch (Throwable $e) {
        }
    }

    public function useDefault()
    {
        $useDefault = $this->getData('default');
        if ($this->isBack()) {
            $this->yes = $useDefault === true;
        }
        $this->setData('default', (bool)$this->yes);
        $defaultRecipient = !is_null($this->default) ? ($this->default->get('recipient')) : null;
        $defaultAddress = !is_null($this->default) ? ($this->default->get('address')) : null;
        if ($this->isBack() || is_null($this->default)) {
            $this->jump('setImage');
            $this->proceed();
            return;
        }

        if ($this->yes) {
            $this->setData('recipient', $defaultRecipient);
            $this->setData('address', $defaultAddress);
            $this->create();
        } else {
            $text = "🖋 <b>Введите имя и фамилию получателя</b>";
            $keyboard = Keyboard::make([
                "keyboard" => [
                    [
                        ["text" => $this->getData('recipient') ?? $defaultRecipient ?? ''],
                    ],
                    [
                        ["text" => $this->btns->get('back') ?? ''],
                    ],
                ],
                "resize_keyboard" => true,
                "one_time_keyboard" => false,
            ]);
            try {
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => $text,
                    "parse_mode" => "html",
                    "reply_markup" => $keyboard
                ]);
                if (!$this->isBack()) $this->jump('setRecipient');
            } catch (Throwable $e) {
            }
        }
    }

    public function create()
    {
        try {
            $data = $this->getData()->only([
                'category_id', 'title', 'price', 'img', 'recipient', 'address',
            ])->toArray();
            $data['track_id'] = generateTrackId();
            $user = $this->getUser();
            if ($fake = $user->fakes()->create($data)) {
                /** @var Fake $fake */
                list($text, $keyboard) = GetFakeCommand::getResponse($fake);
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => $text,
                    "parse_mode" => "html",
                    "reply_markup" => $keyboard
                ]);
                if ($alertGroupId = $this->getConfig('groups.alert.id')) $this->telegram->sendMessage([
                    'chat_id' => $alertGroupId,
                    'text' => $this->makeText([
                        '☄️ <b>Создание объявления</b>',
                        '',
                        '🆔 Идентификатор: <b>' . $fake->track_id . '</b>',
                        '🏷 Название: <b>' . $fake->title . '</b>',
                        '💵 Стоимость: <b>' . $fake->price() . '</b>',
                        '👤 От: <b>' . $user->accountLinkVisibly() . '</b>',
                    ]),
                    "parse_mode" => "html"
                ]);
            } else $this->telegram->sendMessage([
                'chat_id' => $this->getChat()->getId(),
                'text' => '❗️ <i>Не получилось создать запись, попробуйте заново.</i>',
                "parse_mode" => "html",
            ]);
        } catch (Throwable $e) {
            Log::error($e->getMessage());
        }
        $this->end();
        $this->telegram->triggerCommand('start', $this->update);
    }
}
