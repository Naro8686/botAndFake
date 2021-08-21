<?php

namespace App\Telegram\Commands;

use App\Models\Role;
use App\Models\TelegramUser;
use Illuminate\Support\Str;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;


/**
 * Class HelpCommand.
 */
class ChangeStatusCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'changeStatus';

    /**
     * @var string Command Description
     */
    protected $description = 'Изменить статус пользователя';

    protected $pattern = '{telegram_id}{name}';

    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $update = $this->getUpdate();
        $telegram_id = $this->getArguments()['telegram_id'] ?? null;
        $name = $this->getArguments()['name'] ?? null;
        $role = Role::whereName($name)->first();
        $user = TelegramUser::find($telegram_id);
        if (is_null($user) || is_null($role)) return;
        if ($user->role_id === $role->id) {
            $this->replyWithMessage([
                "text" => "Статус <b>не изменился</b>",
                "parse_mode" => "html",
            ]);
            return;
        }
        $oldRoleName = $user->getRoleName();
        $user->role_id = $role->id;
        if ($user->save()) {
            $newRoleName = $role->getRoleName();
            $user->sendMessage([
                "text" => "Ваш статус изменился на <b>$newRoleName</b>",
                "parse_mode" => "html",
            ]);
            if ($update->isType('callback_query')) {
                try {
                    $message = $update->getMessage();
                    $text = Str::replace($oldRoleName, $newRoleName, $message->text ?? '');
                    $mid = $message->messageId;
                    $chat_id = $message->chat->id;
                    $replaced = Str::replace(json_encode("$oldRoleName *"), "\"$oldRoleName\"", $message->replyMarkup);
                    $replyMarkup = Str::replace(json_encode($newRoleName), "\"$newRoleName *\"", $replaced);
                    $this->getTelegram()->editMessageReplyMarkup([
                        "text" => $text,
                        "parse_mode" => "html",
                        "message_id" => $mid,
                        "chat_id" => $chat_id,
                        "reply_markup" => $replyMarkup,
                        "disable_web_page_preview" => true
                    ]);
                } catch (TelegramSDKException $e) {
                }
            } else {
                $this->replyWithChatAction(['action' => Actions::TYPING]);
                $this->replyWithMessage([
                    "text" => "Статус изменился на <b>$newRoleName</b>",
                    "parse_mode" => "html",
                ]);
            }
        }
    }
}