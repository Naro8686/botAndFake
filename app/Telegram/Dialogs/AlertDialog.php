<?php

namespace App\Telegram\Dialogs;

use Log;
use App\Models\TelegramUser;
use Telegram\Bot\Exceptions\TelegramSDKException;

class AlertDialog extends Dialog
{
    protected $steps = [
        'index',
        'sendMsg'
    ];

    public function index()
    {
        try {
            $this->telegram->sendMessage([
                "chat_id" => $this->getChat()->getId(),
                "text" => "❕<i>Напишите сообщения</i>",
                "parse_mode" => "html",
            ]);
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }


    public function sendMsg()
    {
        try {
            $message = $this->update->getMessage();
            $msg = trim($message->getText());
            $isCommand = in_array(trim($msg), $this->getConfig('btns')->toArray(), true);
            if (!empty($msg) && !$message->from->isBot && !$isCommand) {
                $users = TelegramUser::where('id', '<>', $this->getUser()->id)->get();
                foreach ($users as $user) $user->sendMessage([
                    "text" => $msg,
                    "parse_mode" => "html",
                ]);

                $this->getUser()->sendMessage([
                    "text" => !empty($users) ? "✅<i>Сообщения успешно отправлено</i>" : "❕ <i>Пользователей не найдено</i>",
                    "parse_mode" => "html",
                ]);
                $this->end();
            } else {
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>Сообщения не может быть пустым</i>",
                    "parse_mode" => "html",
                ]);
                $this->jump('index');
                $this->proceed();
            }
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }
}