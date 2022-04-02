<?php

namespace App\Telegram\Commands\Admin;


use Log;
use Throwable;
use Telegram\Bot\Actions;
use Telegram\Bot\Keyboard\Keyboard;
use App\Models\Role;
use App\Models\TelegramUser;

class ApproveCommand extends BaseAdminCommand
{
    protected $name = 'approve';
    protected $description = 'Принять заявку';
    protected $pattern = '{telegram_id}';

    public function handle()
    {
        try {
            $admin = $this->getUser();
            $telegram_id = $this->getArguments()['telegram_id'] ?? null;
            if ($admin->id === $telegram_id) return;
            $telegram = $this->getTelegram();
            $date = now()->format('d.m.Y H:i:s');
            $user = TelegramUser::whereId($telegram_id)->first();
            $request = $user->request ?? null;
            $this->replyWithChatAction(['action' => Actions::TYPING]);

            if (is_null($telegram_id) || is_null($user) || is_null($request) || $request->approved === true) {
                $this->replyWithMessage([
                    "text" => "❕ <i>Запрос не существует</i>",
                    "parse_mode" => "html",
                ]);
            } else {
                $role = Role::whereName(Role::WORKER)->first();
                $request->replied_id = $admin->id;
                $request->approved = true;
                $user->role_id = $role->id ?? null;
                if ($user->push()) {
                    $telegram->deleteMessage([
                        "chat_id" => $this->getUpdate()->getMessage()->getChat()->getId(),
                        "message_id" => $request->id,
                    ]);
                    $user->sendMessage([
                        "text" => "🎉 <b>Ваша заявка на вступление одобрена</b>",
                        "parse_mode" => "html",
                        "reply_markup" => Keyboard::make([
                            "inline_keyboard" => [
                                [
                                    ["text" => $this->getConfig('btns.profile'), "callback_data" => "/profile"]
                                ],
                                [
                                    ["text" => '💎 Чат воркеров', "url" => setting('chat_link')],
                                    ["text" => '💰 Канал выплат', "url" => setting('chat_pays')]
                                ]
                            ],
                            "resize_keyboard" => true,
                        ])
                    ]);
                    if ($referrer = $user->referrer()->first()) $referrer->sendMessage([
                        "text" => "🤝 У вас появился новый реферал - <b>{$user->accountLinkVisibly()}</b>",
                        "parse_mode" => "html",
                    ]);
                    if ($alertId = $this->getConfig('groups.alert.id')) $telegram->sendMessage([
                        "chat_id" => $alertId,
                        "text" => makeText([
                            "🐥 <b>Одобрение заявки</b>",
                            "",
                            "👤 Подал: <b>{$user->accountLinkVisibly()}</b>",
                            "📆 Дата: <b>$date</b>",
                            "❤️ Принял: <b>{$admin->accountLinkVisibly()}</b>",
                        ]),
                        "parse_mode" => "html",
                    ]);
                }
            }
        } catch (Throwable $e) {
            Log::error($e->getMessage());
        }
    }
}
