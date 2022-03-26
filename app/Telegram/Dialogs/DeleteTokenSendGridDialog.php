<?php

namespace App\Telegram\Dialogs;

use App\Models\Sendgrid;
use Log;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Throwable;

class DeleteTokenSendGridDialog extends Dialog
{
    protected $steps = [
        'index',
        ['name' => 'answer', 'is_dich' => true]
    ];

    public function index()
    {
        try {
            $sendgrid_id = $this->getData('sendgrid_id');
            if (is_null($sendgrid_id)) {
                $btns = $this->getConfig('btns');
                $text = "❗️ <b>Не получилось удалить токен!</b>";
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
            $sendgrid_id = $this->getData('sendgrid_id');
            $btns = $this->getConfig('btns');

            if ($this->yes) {
                $sendgrid = Sendgrid::whereId($sendgrid_id)->first();
                $token = $sendgrid->token;
                if ($sendgrid->delete()) $text = "♻️ <b>Вы успешно удалили токен</b>: <code>$token</code>";
                else $text = "🤷🏻‍️ <i>Что То пошло не так</i>";
            } else $text = "❌ <i>Отмена действия</i>";

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
        } catch (Throwable $exception) {
            try {
                $this->telegram->sendMessage([
                    "chat_id" => $this->getChat()->getId(),
                    "text" => "❗️ <b>Попробуйте чуть позже!</b>",
                    "parse_mode" => "html"
                ]);
            } catch (TelegramSDKException $e) {
            }
        }
    }

}
