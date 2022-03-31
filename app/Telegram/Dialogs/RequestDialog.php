<?php

namespace App\Telegram\Dialogs;

use App\Http\Controllers\Telegram\BotController;
use App\Models\TelegramUser;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Objects\Update;
use Throwable;

class RequestDialog extends Dialog
{
    protected $steps = [
        'hello',
        'checkRead',
        'howDidYouKnow',
        ['name' => 'practice', 'is_dich' => true],
        'referred',
        'sendRequest',
    ];

    public $btns;

    public function __construct(Update $update, ?TelegramUser $user)
    {
        parent::__construct($update, $user);
        $this->btns = $this->getConfig('btns')->merge([
            'forum' => 'Форум',
            'ad' => 'Реклама',
            'friends' => 'От друзей',
            'nobody' => '🌱 Никто',
            "read" => "✅ Ознакомлен",
            "send" => "✅ Отправить",
        ]);
    }

    public function hello()
    {
        try {
            $telegram = $this->telegram;
            $botName = $telegram->getMe()->firstName ?? $this->getConfig('name');
            $this->setData('error', false);
            $text = $this->makeText(["🥀 Добро пожаловать в <b>$botName</b>"]);
            $keyboard = Keyboard::make([
                "keyboard" => [
                    [["text" => $this->btns->get('read') ?? '']],
                    [["text" => $this->btns->get('back') ?? '']],
                ],
                "resize_keyboard" => true,
                "one_time_keyboard" => false,
            ]);
            $telegram->sendMessage([
                'chat_id' => $this->getChat()->getId(),
                'text' => $text,
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);
        } catch (Throwable $e) {
            Log::error($e->getMessage());
        }
    }

    public function checkRead()
    {
        try {
            $read = $this->isBack() || $this->getData('error')
                ? $this->getData('read') ?? ''
                : trim($this->update->getMessage()->getText());

            if (!empty($read) && $read === $this->btns->get('read')) {
                $this->setData('read', $read);
                $this->setData('error', false);
                $text = $this->makeText([
                    "<b>🍪 Откуда вы узнали о нас?</b>",
                    "",
                    "❕ <i>Можете написать свой вариант или выбрать из списка</i>"
                ]);
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [
                            ["text" => $this->btns->get('forum') ?? ''],
                            ["text" => $this->btns->get('ad') ?? ''],
                            ["text" => $this->btns->get('friends') ?? ''],
                        ],
                        [
                            ["text" => $this->getData('learn') && !in_array($this->getData('learn'), [
                                $this->btns->get('forum'),
                                $this->btns->get('friends'),
                                $this->btns->get('ad'),
                            ]) ? $this->getData('learn') : ''],
                        ],
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
                $text = "Подтверждаете что ознакомились";
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>$text</i>",
                    "parse_mode" => "html"
                ]);
                $this->jump('hello');
                $this->proceed();
            }
        } catch (Throwable $e) {
            Log::error($e->getMessage());
        }
    }

    public function howDidYouKnow()
    {
        try {
            $learn = $this->isBack() || $this->getData('error')
                ? $this->getData('learn') ?? ''
                : trim($this->update->getMessage()->getText());
            $valid = in_array($learn, [
                    $this->btns->get('forum'),
                    $this->btns->get('friends'),
                    $this->btns->get('ad'),
                ]) || strlen($learn) >= 5;
            if (!empty($learn) && $valid) {
                $this->setData('learn', $learn);
                $this->setData('error', false);
                $text = $this->makeText([
                    "🖋 <b>Есть ли опыт работы? Если да, то какой</b>",
                ]);
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [
                            ["text" => "нет"],
                            ["text" => $this->getData('practice') ?? ''],
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
                $text = "минимум 5 букв";
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>$text</i>",
                    "parse_mode" => "html"
                ]);
                $this->jump('checkRead');
                $this->proceed();
            }
        } catch (Throwable $e) {
            Log::error($e->getMessage());
        }
    }

    public function practice()
    {
        try {
            if ($this->isBack() || $this->getData('error')) {
                $this->no = is_null($this->getData('practice'));
            }
            $practice = $this->isBack() || $this->getData('error')
                ? $this->getData('practice')
                : trim($this->update->getMessage()->getText());

            if ($this->no) {
                $valid = $this->no;
                $this->setData('practice');
            } else {
                $valid = (!empty($practice) && strlen($practice) >= 5);
                if ($valid) $this->setData('practice', $practice);
            }
            if ($valid) {
                $this->setData('error', false);
                $text = $this->makeText([
                    "🖋 <b>Кто вас пригласил? Введите его ID</b>",
                ]);
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [
                            ["text" => $this->btns->get('nobody') ?? ''],
                            ["text" => $this->getData('referrer_id') ?? ''],
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
                $text = "минимум 5 букв";
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>$text</i>",
                    "parse_mode" => "html"
                ]);
                $this->jump('howDidYouKnow');
                $this->proceed();
            }
        } catch (Throwable $e) {
            Log::error($e->getMessage());
        }
    }

    public function referred()
    {
        try {
            $referred = $this->isBack() || $this->getData('error')
                ? $this->getData('referrer_id') ?? $this->btns->get('nobody')
                : trim($this->update->getMessage()->getText());

            if ($referred === $this->btns->get('nobody')) {
                $valid = true;
                $this->setData('referred');
            } else {
                if (is_numeric($referred)) {
                    $user = $this->getUser();
                    if ($ref = TelegramUser::whereId($referred)->where('id', '<>', $user->id)->first()) {
                        $valid = true;
                        $this->setData('referrer_id', $ref->id);
                    } else $valid = false;
                } else $valid = false;

            }

            if ($valid) {
                $this->setData('error', false);
                $learn = $this->getData('learn');
                $practice = $this->getData('practice') ?? "Нет";
                $referred = $this->getData('referrer_id') ?? "Никто";
                $text = $this->makeText([
                    "🐥 Ваша заявка готова к отправке",
                    "",
                    "🍪 Откуда узнали: $learn",
                    "⭐️ Опыт: $practice",
                    "🤝 Пригласил: $referred",
                ]);
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [
                            ["text" => $this->btns->get('send') ?? ''],
                            ["text" => $this->btns->get('cancel') ?? ''],
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
                $text = "Пользователь с таким ид не найдено";
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>$text</i>",
                    "parse_mode" => "html"
                ]);
                $this->jump('practice');
                $this->proceed();
            }
        } catch (Throwable $e) {
            Log::error($e->getMessage());
        }
    }

    public function sendRequest()
    {
        try {
            $update = $this->update;
            $telegram = $this->telegram;
            if (trim($update->getMessage()->getText()) === $this->btns->get('cancel')) {
                $this->telegram->triggerCommand('start', $update);
                return;
            }
            $text = "❗️ <b>Что то пошло не так</b>";
            $user = $this->getUser();
            $request = $user->request()->firstOrNew();
            $data = $this->getData()->only(['learn', 'practice', 'referrer_id']);
            $request->learn = $data->get('learn');
            $request->practice = $data->get('practice');
            $request->referrer_id = $data->get('referrer_id');
            $username = $user->getName();
            $learn = $data->get('learn');
            $practice = $data->get('practice') ?? 'Нет';
            $referredId = $data->get('referrer_id') ?? 'Никто';
            $date = now()->format('d.m.Y H:i:s');
            if ($adminGroupId = BotController::groupAdmin('id')) {
                $message = $this->telegram->sendMessage([
                    'chat_id' => $adminGroupId,
                    'text' => $this->makeText([
                        "🐥 <b>Заявка на вступление</b>",
                        "",
                        "👤 От: <a href='tg://user?id=$user->id'><b>$username</b></a>",
                        "🍪 Откуда узнал: <b>$learn</b>",
                        "⭐️ Опыт: <b>$practice</b>",
                        "🤝 Пригласил: <b>$referredId</b>",
                        "📆 Дата: <b>$date</b>",
                    ]),
                    "parse_mode" => "html",
                    "reply_markup" => Keyboard::make([
                        "inline_keyboard" => [[
                            ["text" => $this->btns->get('approve') ?? '', 'callback_data' => "/approve $user->id"],
                            ["text" => $this->btns->get('reject') ?? '', 'callback_data' => "/reject $user->id"],
                        ]],
                        "resize_keyboard" => true,
                        "one_time_keyboard" => false,
                    ])
                ]);
                $request->id = $message->messageId;
                if ($request->save()) $text = "💎 <b>Вы подали заявку на вступление</b>";
                else $telegram->deleteMessage([
                    "chat_id" => $adminGroupId,
                    "message_id" => $request->id,
                ]);
            }
            $keyboard = Keyboard::make([
                "keyboard" => [[["text" => $this->btns->get('start') ?? '']]],
                "resize_keyboard" => true,
                "one_time_keyboard" => false,
            ]);
            $this->telegram->sendMessage([
                'chat_id' => $this->getChat()->getId(),
                'text' => $text,
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);

        } catch (Throwable $e) {
        }
    }

}
