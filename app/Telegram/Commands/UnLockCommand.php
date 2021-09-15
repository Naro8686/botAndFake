<?php

namespace App\Telegram\Commands;

use App\Http\Controllers\Telegram\BotController;
use App\Models\Role;
use App\Models\TelegramUser;
use Illuminate\Support\Str;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;


/**
 * Class HelpCommand.
 */
class UnLockCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'unlock';

    /**
     * @var string Command Description
     */
    protected $description = 'Разблокировать';

    protected $pattern = '{telegram_id}';
    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $btns = $this->getConfig('btns');
        $update = $this->getUpdate();
        $telegram_id = $this->getArguments()['telegram_id'] ?? null;
        if (is_null($telegram_id)) return;
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $user = TelegramUser::find($telegram_id);
        if (!is_null($user)) {
            $user->has_ban = false;
            if ($user->save()) {
                try {
                    $message = $update->getMessage();
                    $mid = $message->messageId;
                    $chat_id = $message->getChat()->getId();
                    if ($update->isType('callback_query')) {
                        $replaced = Str::replace(json_encode($btns->get('unlock')), "\"{$btns->get('lock')}\"", $message->replyMarkup);
                        $replyMarkup = Str::replace('unlock', 'lock', $replaced);
                        $this->getTelegram()->editMessageReplyMarkup([
                            "parse_mode" => "html",
                            "message_id" => $mid,
                            "chat_id" => $chat_id,
                            "reply_markup" => $replyMarkup,
                        ]);
                    }

//                    $this->getTelegram()->unbanChatMember([
//                        "chat_id" => $chat_id,
//                        "user_id" => $telegram_id,
//                    ]);
                    foreach ([$this->getConfig('groups.admin.id'), $this->getConfig('groups.alert.id')] as $id)
                        if ($id) $this->getTelegram()->unbanChatMember([
                            "chat_id" => $id,
                            "user_id" => $telegram_id
                        ]);
                } catch (TelegramSDKException $e) {
                }
                if ($alertGroupId = $this->getConfig('groups.alert.id')) try {
                    $this->getTelegram()->sendMessage([
                        "chat_id" => $alertGroupId,
                        "text" => "✅ <b>Пользователь {$user->accountLinkVisibly()} разблокирован</b>",
                        "parse_mode" => "html",
                    ]);
                } catch (TelegramSDKException $e) {
                    \Log::error($e->getMessage());
                }
                $user->sendMessage([
                    "text" => "✅ Вас разблокировал <b>{$this->getUser()->getName()}</b>",
                    "parse_mode" => "html",
                ]);
            } else $this->replyWithMessage([
                "text" => "❗️ <b>Ошибка</b>",
                "parse_mode" => "html",
            ]);
        } else {
            $this->replyWithMessage([
                "text" => "❕ <i>Пользователь не найден</i>",
                "parse_mode" => "html",
            ]);
        }
    }
}