<?php

namespace App\Telegram\Dialogs;

use App\Http\Controllers\Fake\ChatController;
use App\Models\TelegramUser;
use Exception;
use Illuminate\Support\Facades\DB;
use Log;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Objects\Update;
use Throwable;

class ChatAnswerDialog extends Dialog
{
    protected $steps = [
        'index',
        'send'
    ];
    public $btns;

    public function __construct(Update $update, TelegramUser $user)
    {
        parent::__construct($update, $user);
        $this->btns = $this->getConfig('btns');
    }

    public function index()
    {
        try {
            if ($this->getData('track_id')) {
                $text = '🖋 <b>Напишите сообщение</b>';
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [["text" => $this->getData('message', '')]],
                        [["text" => $this->btns['back']]]
                    ],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);

            } else {
                $text = "❗️ <b>Что-то пошло не так</b>";
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
        } catch (Throwable|TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }

    public function send()
    {
        try {
            $track_id = $this->getData('track_id');
            $message = $this->isBack() || $this->getData('error')
                ? $this->getData('message') ?? ''
                : trim($this->update->getMessage()->getText());

            if (!empty($message) && !empty($track_id)) {
                $this->setData('message', $message);
                $this->setData('error', false);
                $sent = DB::table('chat')->insert([
                    'role' => ChatController::ADMIN,
                    'message' => $message,
                    'track' => $track_id
                ]);
                if ($sent) $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "✅ <b>Сообщение отправлено</b>",
                    "parse_mode" => "html",
                    "reply_markup" => Keyboard::make([
                        "keyboard" => [
                            [["text" => $this->btns['start']]],
                        ],
                        "resize_keyboard" => true,
                        "one_time_keyboard" => false,
                    ])
                ]);
                else throw new Exception();
            } else throw new Exception();
            $this->end();
        } catch (Throwable|TelegramSDKException $e) {
            if (!$e instanceof TelegramSDKException) {
                try {
                    $this->setData('error', true);
                    $this->telegram->sendMessage([
                        'chat_id' => $this->getChat()->getId(),
                        'text' => "❗️ <i>Что-то пошло не так</i>",
                        "parse_mode" => "html",
                    ]);
                    $this->jump('index');
                    $this->proceed();
                } catch (TelegramSDKException $e) {
                }
            }
            Log::error("send: {$e->getMessage()}");
        }
    }
}
