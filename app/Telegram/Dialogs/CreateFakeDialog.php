<?php

namespace App\Telegram\Dialogs;

use App\Models\Category;
use App\Models\Fake;
use App\Models\TelegramUser;
use App\Telegram\Commands\GetFakeCommand;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Log;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Objects\Update;

class CreateFakeDialog extends Dialog
{
    protected $steps = [
        'selectCategory',
        'setCategory',
        ['name' => 'useParsing', 'is_dich' => true],
        'setParsUrl',
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

    /**
     */
    public function __construct(Update $update, TelegramUser $user)
    {
        parent::__construct($update, $user);
        $this->btns = $this->getConfig('btns');
        $this->default = $user->getSettings('default');
    }

    public function selectCategory()
    {
        try {
            $categoryNames = Category::get()->pluck(['name'])->map(function ($name) {
                return Str::ucfirst($name);
            });
            $text = $this->makeText([
                "📝 <b>Выбор сервиса для создания</b>",
                "",
                "❕ <i>Вы можете создать ссылки на <b>{$categoryNames->implode('/')}</b>, выберите нужный сервис.</i>"
            ]);
            $categoryBtns = $categoryNames->map(function ($name) {
                return ["text" => "💠 $name"];
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
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }

    public function setCategory()
    {
        try {
            $category = null;
            $regex = Category::get()->pluck(['name'])->implode('|');
            $name = Str::lower(trim(strip_tags($this->update->getMessage()->getText())));
            if (!empty($name) && preg_match("/$regex/ui", $name, $matches)) {
                $category = Category::where('name', 'like', "%$matches[0]%")->first();
            } elseif ($category_id = $this->getData('category_id')) {
                $category = Category::whereId($category_id)->first();
            }

            if (!is_null($category)) {
                $this->setData('category_id', $category->id);
                $this->setData('error', false);
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [["text" => "да"], ["text" => "нет"]],
                        [["text" => $this->btns->get('back') ?? '']]
                    ],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);
                $this->telegram->sendMessage([
                    "chat_id" => $this->getChat()->getId(),
                    "text" => "<i>💡<b>Использовать парсинг ❔</b></i>",
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
        } catch (TelegramSDKException | \Exception $e) {
            Log::error($e->getMessage());
        }
    }

    /**
     * @throws TelegramSDKException
     */
    public function useParsing()
    {
        if ($this->isBack() || $this->getData('error')) {
            $this->yes = $this->getData('parsing') === true;
        }
        $this->setData('parsing', (bool)$this->yes);
        $this->setData('error', false);
        if ($this->yes) {
            $text = '🖋️ <b>Напишите ссылку для парсинга</b>';
            $keyboard = Keyboard::make([
                "keyboard" => [[["text" => $this->btns->get('back') ?? '']]],
                "resize_keyboard" => true,
                "one_time_keyboard" => false,
            ]);
        } else {
            if ($this->isBack()) {
                $this->jump('setCategory');
                $this->proceed();
                return;
            }
            $text = '🖋 <b>Введите название товара</b>';
            $keyboard = Keyboard::make([
                "keyboard" => [
                    [
                        ["text" => $this->getData("title") ?? ''],
                    ],
                    [
                        ["text" => $this->btns->get('back') ?? ''],
                    ],
                ],
                "resize_keyboard" => true,
                "one_time_keyboard" => false,
            ]);
            $this->jump('setTitle');
        }
        $this->telegram->sendMessage([
            'chat_id' => $this->getChat()->getId(),
            'text' => $text,
            "parse_mode" => "html",
            "reply_markup" => $keyboard
        ]);
    }

    public function setParsUrl()
    {
        try {
            $text = [];
            if ($this->getData('parsing') === true) {
                $url = trim($this->update->getMessage()->getText());
                $category = Category::whereId($this->getData('category_id'))->first();
                foreach ($category->parse($url) as $key => $value) {
                    if (!is_null($value)) $this->setData($key, $value);
                }
                $data = $this->getData()->only(['price', 'title', 'img'])->map(function ($value) {
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
                        $text[] = "<b>Использовать данные по умолчанию ❔</b>";
                        $keyboard = Keyboard::make([
                            "keyboard" => [
                                [
                                    ["text" => "да"],
                                    ["text" => "нет"],
                                ],
                                [
                                    ["text" => $this->btns->get('back') ?? ''],
                                ],
                            ],
                            "resize_keyboard" => true,
                            "one_time_keyboard" => false,
                        ]);
                        if (!$this->isBack()) $this->jump('useDefault');
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
            } else {
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
            $this->telegram->sendMessage([
                'chat_id' => $this->getChat()->getId(),
                'text' => $this->makeText($text),
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);
        } catch (TelegramSDKException $e) {
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
        } catch (TelegramSDKException $e) {
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
        } catch (TelegramSDKException $exception) {
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
                } else {
                    $text = "<b>Использовать данные по умолчанию ❔</b>";
                    $keyboard = Keyboard::make([
                        "keyboard" => [
                            [
                                ["text" => "да"],
                                ["text" => "нет"],
                            ],
                            [
                                ["text" => $this->btns->get('back') ?? ''],
                            ],
                        ],
                        "resize_keyboard" => true,
                        "one_time_keyboard" => false,
                    ]);
                    if (!$this->isBack()) $this->jump('useDefault');
                }
                $this->setData('error', false);
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
                    'text' => "❗️ <i>Укажите правильную ссылку</i>",
                    "parse_mode" => "html"
                ]);
                $this->jump('setPrice');
                $this->proceed();
            }
        } catch (TelegramSDKException $e) {
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
        } catch (TelegramSDKException $e) {
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
        } catch (TelegramSDKException $e) {
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
            } catch (TelegramSDKException $e) {
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
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
        $this->end();
        $this->telegram->triggerCommand('start', $this->update);
    }
}