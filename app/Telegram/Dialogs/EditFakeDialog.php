<?php

namespace App\Telegram\Dialogs;

use App\Models\Fake;
use App\Models\TelegramUser;
use Log;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Objects\Update;

class EditFakeDialog extends Dialog
{
    protected $steps = [
        'getFake',
        'setTitle',
        'setPrice',
        'setImg',
        'setRecipient',
        'setAddress',
    ];
    public $btns;

    public function __construct(Update $update, TelegramUser $user)
    {
        parent::__construct($update, $user);
        $this->btns = $this->getConfig('btns');
    }

    public function getFake()
    {
        try {
            if ($fake = $this->getData('fake')) {
                $text = '🖋 <b>Введите название товара</b>';
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [
                            ["text" => $this->getData('title') ?? $fake['title'] ?? '']
                        ],
                        [
                            ["text" => $this->btns['back']],
                        ]
                    ],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);

            } else {
                $text = "❗️ <b>Такой объявление не существует!</b>";
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [
                            ["text" => $this->btns['back']],
                        ]
                    ],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);
                $this->end();
            }
            $this->telegram->sendMessage([
                'chat_id' => $this->getChat()->getId(),
                'text' => $text,
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }

    public function setTitle()
    {
        try {
            $fake = $this->getData('fake');
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
                        [["text" => $this->getData('price') ?? $fake['price'] ?? '']],
                        [["text" => $this->btns['back']]],
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
                    'text' => "❗️ <i>заполните поле правильно</i>",
                    "parse_mode" => "html",
                ]);
                $this->jump('getFake');
                $this->proceed();
            }
        } catch (TelegramSDKException $e) {
            Log::error("setTitle: {$e->getMessage()}");
        }
    }

    public function setPrice()
    {
        try {
            $fake = $this->getData('fake');
            $img = $this->getData('img');
            if (!is_null($img) && $fake['img'] !== $img && file_exists($img)) {
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
                    "🖋 <b>Введите ссылку на изображение товара или выберите файл</b>",
                    "",
                    "❕ <i>Формат: <code>https://example.com/image.png</code> (главное прямой путь к картинке с форматом)</i>"
                ]);
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [["text" => $this->getData('img') ?? $fake['img'] ?? '']],
                        [["text" => $this->btns['back']]],
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
                    "chat_id" => $this->getChat()->getId(),
                    "text" => "❗️ <i>Стоимость товара надо писать в цифрах</i>",
                    "parse_mode" => "html",
                ]);
                $this->jump('setTitle');
                $this->proceed();
            }
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }

    public function setImg()
    {
        try {
            $telegram = $this->telegram;
            $update = $this->update;
            $message = $update->getMessage();
            $fake = $this->getData('fake');
            $img = $this->isBack() || $this->getData('error')
                ? $this->getData('img') ?? ''
                : trim($message->getText());
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
                    $img = $this->downloadFile($file->filePath, $ext);
                }
            }

            if (!empty($img) && (filter_var($img, FILTER_VALIDATE_URL) || file_exists($img))) {
                if ($img !== $this->getData('img') && $fake['img'] !== $this->getData('img') && file_exists($this->getData('img'))) {
                    unlink($this->getData('img'));
                }
                $this->setData('img', $img);
                $this->setData('error', false);
                $text = $this->makeText(["🖋 <b>Введите имя и фамилию получателя</b>",]);
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [["text" => $this->getData('recipient') ?? $fake['recipient'] ?? '']],
                        [["text" => $this->btns['back']]],
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
                    'text' => "❗️ <i>Укажите правильную ссылку</i>",
                    "parse_mode" => "html"
                ]);
                $this->jump('setPrice');
                $this->proceed();
            }
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }

    public function setRecipient()
    {
        try {
            $fake = $this->getData('fake');
            $recipient = $this->isBack() || $this->getData('error')
                ? $this->getData('recipient') ?? ''
                : trim($this->update->getMessage()->getText());
            list($fname, $lname) = array_pad(explode(' ', $recipient), 2, null);
            if (!empty($recipient) && !(is_null($fname) || is_null($lname))) {
                $this->setData('recipient', $recipient);
                $this->setData('error', false);
                $text = $this->makeText([
                    "🖋 <b>Введите полный адрес получателя</b>",
                    "",
                    "❕ <i>Пример: 00-001, г. Warsaw, ul. Kurwa, d. 2</i>"
                ]);
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [["text" => $this->getData('address') ?? $fake['address'] ?? '']],
                        [["text" => $this->btns['back']]],
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
                    "parse_mode" => "html"
                ]);
                $this->jump('setImg');
                $this->proceed();
            }
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }

    public function setAddress()
    {
        try {
            $track_id = $this->getData('fake')['track_id'];
            $address = $this->isBack() || $this->getData('error')
                ? $this->getData('address') ?? ''
                : trim($this->update->getMessage()->getText());

            if (!empty($address) && strlen($address) > 4) {
                $this->setData('address', $address);
                $this->setData('error', false);
                $data = $this->getData()->only([
                    'title', 'price', 'img', 'recipient', 'address',
                ])->toArray();
                $fake = Fake::whereTrackId($track_id)->first();
                $oldImg = $fake->img;
                if ($fake->update($data)) {
                    if ($data['img'] !== $oldImg && file_exists($oldImg)) {
                        unlink($oldImg);
                    }
                    $keyboard = Keyboard::make([
                        "inline_keyboard" => [
                            [["text" => $this->btns['getFake'] ?? '', "callback_data" => "/getFake $track_id"]],
                            [["text" => "📎 Ссылка чата", "url" => $fake->adminChatLink()]],
                            [["text" => $this->btns['sendEmail'] ?? '', "callback_data" => "/send email $track_id"]],
                            [
                                ["text" => $this->btns['sendSms'] ?? '', "callback_data" => "/send sms $track_id"],
                                ["text" => $this->btns['getSmsBalance'] ?? '', "callback_data" => '/getSmsBalance']
                            ]
                        ],
                        "resize_keyboard" => true,
                    ]);
                    $this->telegram->sendMessage([
                        'chat_id' => $this->getChat()->getId(),
                        'text' => "🔄 <b>Изменение успешно сохранены!</b>",
                        "parse_mode" => "html",
                        "reply_markup" => $keyboard
                    ]);

                } else {
                    $keyboard = Keyboard::make([
                        "keyboard" => [
                            [["text" => $this->btns['start']]],
                        ],
                        "resize_keyboard" => true,
                        "one_time_keyboard" => false,
                    ]);
                    $this->telegram->sendMessage([
                        'chat_id' => $this->getChat()->getId(),
                        'text' => "❗️ <b>Не удалось сохранить запись, попробуйте еще раз!</b>",
                        "parse_mode" => "html",
                        "reply_markup" => $keyboard
                    ]);
                }
                $this->telegram->triggerCommand('start', $this->update);
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
            Log::error($e->getMessage());
        }
    }

}