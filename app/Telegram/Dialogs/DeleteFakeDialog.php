<?php

namespace App\Telegram\Dialogs;

use Log;
use App\Models\Fake;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Exceptions\TelegramSDKException;

class DeleteFakeDialog extends Dialog
{
    protected $steps = [
        'index',
        ['name' => 'answer', 'is_dich' => true]
    ];

    public function index()
    {
        try {
            $track_id = $this->getData('track_id');
            if (is_null($track_id)) {
                $btns = $this->getConfig('btns');
                $text = "❗️ <b>Такой объявление не существует!!!</b>";
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
                $text = "<b>Вы уверены ❔</b>";
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [
                            ["text" => "да"],
                            ["text" => "нет"],
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

    public function answer()
    {
        try {
            $track_id = $this->getData('track_id');
            $btns = $this->getConfig('btns');
            if ($this->yes) {
                $fake = Fake::whereTrackId($track_id)->first();
                $img = $fake->img;
                if ($fake->delete()) {
                    if (file_exists($img)) unlink($img);
                    $text = "♻️ <i>Вы успешно удалили объявление под номером</i> <b>$track_id</b>";
                    if ($alertId = $this->getConfig('groups.alert.id'))
                        $this->telegram->sendMessage([
                            "chat_id" => $alertId,
                            "text" => "🗑 <b>{$this->getUser()->accountLink()}</b> удалил трек номер <b>$track_id</b>",
                            "parse_mode" => "html",
                        ]);

                } else $text = "🤷🏻‍️ <i>Что То пошло не так</i>";
            } else {
                $text = "❌ <i>Отмена действия</i>";
            }
            $keyboard = Keyboard::make([
                "keyboard" => [
                    [["text" => $btns->get('start') ?? '']],
                ],
                "resize_keyboard" => true,
                "one_time_keyboard" => false,
            ]);
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

}