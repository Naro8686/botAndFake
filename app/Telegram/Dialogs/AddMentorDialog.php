<?php

namespace App\Telegram\Dialogs;

use App\Models\Mentor;
use App\Models\TelegramUser;
use Exception;
use Log;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Objects\Update;
use Throwable;

class AddMentorDialog extends Dialog
{
    protected $steps = [
        'index',
        'description'
    ];
    public $btns;

    public function __construct(Update $update, TelegramUser $user)
    {
        parent::__construct($update, $user);
        $this->btns = $this->getConfig('btns');
    }

    public function index()
    {
        $this->setData('error', false);
        if ($this->getData('telegram_id')) {
            $text = '🖋 <b>Напишите описание</b>';
        } else {
            $text = "❗️ <b>Что-то пошло не так</b>";
            $this->end();
        }
        $this->telegram->sendMessage([
            'chat_id' => $this->getChat()->getId(),
            'text' => $text,
            "parse_mode" => "html",
            "reply_markup" => Keyboard::make([
                "keyboard" => [[["text" => $this->btns['back']]]],
                "resize_keyboard" => true,
                "one_time_keyboard" => false,
            ])
        ]);
    }

    public function description()
    {
        $telegram = $this->telegram;
        $telegram_id = $this->getData('telegram_id');
        $description = $this->isBack() || $this->getData('description')
            ? $this->getData('description', '')
            : trim($this->update->getMessage()->getText());
        if (!$this->update->isType('callback_query') && !empty($description) && !empty($telegram_id)) {
            $this->setData('description', $description);
            $mentor = Mentor::create(['id' => $telegram_id, 'description' => $description]);
            if ($mentor) {
                $telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "✅ <b>Наставник успешно добавлен</b>",
                    "parse_mode" => "html",
                    "reply_markup" => Keyboard::make([
                        "keyboard" => [[["text" => $this->btns['start']]]],
                        "resize_keyboard" => true,
                        "one_time_keyboard" => false,
                    ])
                ]);

                $admin = $this->getUser();
                $telegram->sendMessage([
                    'chat_id' => $telegram_id,
                    'text' => "✅ <b>{$admin->accountLink()}</b> <b>Вас назначил как наставник </b>",
                    "parse_mode" => "html",
                ]);

            } else throw new Exception();
        } else throw new Exception();
    }
}
