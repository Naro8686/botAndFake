<?php

namespace App\Telegram\Dialogs;

use App\Constants\Status;
use App\Models\Mentor;
use App\Models\TelegramUser;
use Exception;
use Log;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Objects\Update;
use Throwable;

class MentorsDialog extends Dialog
{
    protected $steps = [];
    public $btns;

    public function __construct(Update $update, TelegramUser $user)
    {
        $steps = [];
        parent::__construct($update, $user);
        $this->btns = $this->getConfig('btns');
        switch ($this->getData('method')) {
            case 'set':
                $steps = ['experience', 'set', 'sendRequest'];
                break;
        }
        $this->setSteps($steps);
    }

    public function experience()
    {
        try {
            $this->telegram->sendMessage([
                'chat_id' => $this->getChat()->getId(),
                'text' => '🖋 <b>Расскажите наставнику о своем опыте работы</b>',
                "parse_mode" => "html",
                "reply_markup" => Keyboard::make([
                    "keyboard" => [[["text" => $this->btns['back']]]],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ])
            ]);
        } catch (Throwable $e) {
            Log::error($e->getMessage());
        }
    }

    public function set()
    {
        try {
            $experience = $this->isBack() || $this->getData('experience')
                ? $this->getData('experience', '')
                : trim($this->update->getMessage()->text);
            if (!$this->update->isType('callback_query') && !empty($experience)) {
                $this->setData('experience', $experience);
                $mentor_id = $this->getData('mentor_id');
                $mentor = Mentor::find($mentor_id);
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => $this->makeText([
                        "🐥 Ваша заявка готова к отправке",
                        "",
                        "⭐️ Опыт: $experience",
                        "🤝 Наставник: {$mentor->account->accountLinkVisibly()}",
                    ]),
                    "parse_mode" => "html",
                    "reply_markup" => Keyboard::make([
                        "keyboard" => [
                            [
                                ["text" => $this->btns->get('send', 'send')],
                                ["text" => $this->btns->get('cancel', 'cancel')],
                            ],
                            [["text" => $this->btns->get('back') ?? '']],
                        ],
                        "resize_keyboard" => true,
                        "one_time_keyboard" => false,
                    ])
                ]);
            } else throw new Exception();
        } catch (TelegramSDKException $e) {
        }
    }

    public function sendRequest()
    {
        try {
            $update = $this->update;
            $telegram = $this->telegram;
            switch (trim($update->getMessage()->getText())) {
                case $this->btns->get('send', 'send'):
                    $user = TelegramUser::find($this->getData('tg_id'));
                    $experience = $this->getData('experience');
                    $mentor_id = $this->getData('mentor_id');
                    $user->mentors()->sync([$mentor_id => [
                        'experience' => $experience,
                        'status' => Status::PENDING
                    ]]);
                    $text = "✅ <b>Запрос отправлен</b>";
                    $telegram->sendMessage([
                        'chat_id' => $mentor_id,
                        'text' => makeText([
                            "🧙‍ <b>Предложение об наставничество</b>",
                            "",
                            "👤 От: {$user->accountLinkVisibly(true)}",
                            "⭐️ Опыт: $experience",
                        ]),
                        "parse_mode" => "html",
                        "reply_markup" => Keyboard::make(["inline_keyboard" => [[
                            ["text" => $this->btns->get('approve', 'approve'), 'callback_data' => "/mentors approve $mentor_id $user->id"],
                            ["text" => $this->btns->get('reject', 'reject'), 'callback_data' => "/mentors reject $mentor_id $user->id"],
                        ]], "resize_keyboard" => true, "one_time_keyboard" => false])
                    ]);
                    break;
                case $this->btns->get('cancel', 'cancel'):
                    $text = "❌ <b>Запрос отменен</b>";
                    break;
                default:
                    throw new Exception();
            }
            $telegram->sendMessage([
                'chat_id' => $this->getChat()->getId(),
                'text' => $text,
                "parse_mode" => "html",
                "reply_markup" => Keyboard::make([
                    "keyboard" => [[["text" => $this->btns->get('start', 'start')]]],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ])
            ]);
        } catch (TelegramSDKException $e) {
        }
    }
}
