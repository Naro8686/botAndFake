<?php

namespace App\Telegram\Commands;

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
        $btns=$this->getConfig('btns');
        $update = $this->getUpdate();
        $telegram_id = $this->getArguments()['telegram_id'] ?? null;
        if (is_null($telegram_id)) return;
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $user = TelegramUser::find($telegram_id);
        if (!is_null($user)) {
            $user->has_ban = false;
            if ($user->save()) {

                if ($update->isType('callback_query')) {
                    try {
                        $message = $update->getMessage();
                        $mid = $message->messageId;
                        $chat_id = $message->chat->id;

                        $replaced = Str::replace(json_encode($btns->get('unlock')), "\"{$btns->get('lock')}\"", $message->replyMarkup);
                        $replyMarkup = Str::replace('unlock', 'lock', $replaced);
                        $this->getTelegram()->editMessageReplyMarkup([
                            "parse_mode" => "html",
                            "message_id" => $mid,
                            "chat_id" => $chat_id,
                            "reply_markup" => $replyMarkup,
                        ]);
                    } catch (TelegramSDKException $e) {
                    }
                }
                $text = "✅ <b>Пользователь под ид $user->id разблокирован</b>";
                $user->sendMessage([
                    "text" => "✅ Вас разблокировал <b>{$this->getUser()->getName()}</b>",
                    "parse_mode" => "html",
                ]);
            } else $text = "❗️ <b>Ошибка</b>";
            $this->replyWithMessage([
                "text" => $text,
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