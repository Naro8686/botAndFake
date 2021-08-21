<?php

namespace App\Telegram\Dialogs;

use App\Models\TelegramUser;
use Log;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Exceptions\TelegramSDKException;

class DeleteUserDialog extends Dialog
{
    protected $steps = [
        'index',
        ['name' => 'answer', 'is_dich' => true]
    ];

    public function index()
    {
        try {
            $telegram_id = $this->getData('telegram_id');
            if (is_null($telegram_id)) {
                $btns = $this->getConfig('btns');
                $text = "❗️ <b>Пользователя не найден</b>";
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
            $telegram_id = $this->getData('telegram_id');
            $btns = $this->getConfig('btns');
            if ($this->yes) {
                $text = TelegramUser::whereId($telegram_id)->delete()
                    ? "♻️ <i>Вы успешно удалили пользователя под номером</i> <b>$telegram_id</b>"
                    : "🤷🏻‍️ <i>Что То пошло не так</i>";
            } else {
                $text = "❌ <i>Отмена действия</i>";
            }
            $keyboard = Keyboard::make([
                "keyboard" => [[["text" => $btns->get('start') ?? '']]],
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