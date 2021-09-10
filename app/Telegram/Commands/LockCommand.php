<?php

namespace App\Telegram\Commands;

use App\Models\Role;
use App\Models\TelegramUser;
use Illuminate\Support\Str;
use Log;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;


/**
 * Class HelpCommand.
 */
class LockCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'lock';

    /**
     * @var string Command Description
     */
    protected $description = 'Заблокировать';

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
        $adminGroupId = $this->getConfig('groups.admin.id');
        $alertGroupId = $this->getConfig('groups.alert.id');
        $user = TelegramUser::find($telegram_id);
        if (!is_null($user)) {
            $this->replyWithChatAction(['action' => Actions::TYPING]);
            $user->has_ban = true;
            if ($user->save()) {
                try {
                    $message = $update->getMessage();
                    $mid = $message->messageId;
                    $chat_id = $message->getChat()->getId();
                    if ($update->isType('callback_query')) {
                        $replaced = Str::replace(json_encode($btns->get('lock')), "\"{$btns->get('unlock')}\"", $message->replyMarkup);
                        $replyMarkup = Str::replace('lock', 'unlock', $replaced);
                        $this->getTelegram()->editMessageReplyMarkup([
                            "parse_mode" => "html",
                            "message_id" => $mid,
                            "chat_id" => $chat_id,
                            "reply_markup" => $replyMarkup,
                            "disable_web_page_preview" => true
                        ]);
                    }
                    foreach ([$adminGroupId, $alertGroupId] as $id)
                        if ($id) $this->getTelegram()->kickChatMember([
                            "chat_id" => $id,
                            "user_id" => $telegram_id,
                            "revoke_messages" => true
                        ]);
                } catch (TelegramSDKException $e) {
                    Log::error($e->getMessage());
                }
                if ($alertGroupId) try {
                    $this->getTelegram()->sendMessage([
                        "chat_id" => $alertGroupId,
                        "text" => "🚫 <b>Пользователь <b>{$user->accountLink()}</b> заблокирован</b>",
                        "parse_mode" => "html",
                    ]);
                } catch (TelegramSDKException $e) {
                    Log::error($e->getMessage());
                }
                $user->sendMessage([
                    "text" => "🚫 Вас заблокировал <b>{$this->getUser()->getName()}</b>",
                    "parse_mode" => "html",
                ]);
            } else $this->replyWithMessage([
                "text" => "❗️ <b>Ошибка</b>",
                "parse_mode" => "html",
            ]);
        } else $this->replyWithMessage([
            "text" => "❕ <i>Пользователь не найден</i>",
            "parse_mode" => "html",
        ]);

    }
}