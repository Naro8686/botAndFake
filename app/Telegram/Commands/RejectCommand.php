<?php

namespace App\Telegram\Commands;

use App\Http\Controllers\Telegram\BotController;
use App\Models\Request;
use App\Models\Role;
use App\Models\TelegramUser;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;


/**
 * Class HelpCommand.
 */
class RejectCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'reject';

    /**
     * @var string Command Description
     */
    protected $description = 'Отказать заявку';

    protected $pattern = '{telegram_id}';
    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $admin = $this->getUser();
        $telegram_id = $this->getArguments()['telegram_id'] ?? null;
        if (is_null($admin) || $admin->id === $telegram_id) return;
        $telegram = $this->getTelegram();
        $date = now()->format('d.m.Y H:i:s');
        $adminGroupId = BotController::groupAlert('id');
        $user = TelegramUser::whereId($telegram_id)->first();
        $request = $user->request ?? null;
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        if (is_null($telegram_id) || is_null($user) || is_null($request)) {
            $this->replyWithMessage([
                "text" => "❕ <i>Запрос не существует</i>",
                "parse_mode" => "html",
            ]);
        } else {
            try {
                $telegram->deleteMessage([
                    "chat_id" => $adminGroupId,
                    "message_id" => $request->id,
                ]);
                $user->sendMessage([
                    "text" => "❌ <b>Ваша заявка на вступление отклонена</b>",
                    "parse_mode" => "html",
                    "reply_markup" => Keyboard::make([
                        "keyboard" => [[["text" => $this->getConfig('btns.start')]]],
                        "resize_keyboard" => true,
                    ])
                ]);
                $telegram->sendMessage([
                    "chat_id" => $adminGroupId,
                    "text" => makeText([
                        "🐔 <b>Отклонение заявки</b>",
                        "",
                        "👤 Подал: <a href='tg://user?id=$request->telegram_id'><b>{$user->getName()}</b></a>",
                        "📆 Дата: <b>$date</b>",
                        "💙️ Отказал: <b>{$admin->getName()}</b>",
                    ]),
                    "parse_mode" => "html",
                ]);
                $request->delete();
            } catch (TelegramSDKException $e) {
                Log::error($e->getMessage());
            }
        }
    }
}