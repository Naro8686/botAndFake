<?php

namespace App\Telegram\Commands;

use Exception;
use App\Models\Role;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;


/**
 * Class HelpCommand.
 */
class BotInfoCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'bot_info';

    /**
     * @var string Command Description
     */
    protected $description = 'Info';

    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $telegram = $this->getTelegram();
        try {
            $text = [];
            $getWebhookInfo = $telegram->getWebhookInfo();
            $getMe = $telegram->getMe();
            $text[] = "-------------------";
            $text[] = "🧞‍♂️ <b>Bot</b>";
            $text[] = "-------------------";
            $text[] = "<i>ID:</i> <b>{$getMe->id}</b>";
            $text[] = "<i>Name:</i> <b>{$getMe->firstName}</b>";
            $text[] = "<i>Username:</i> <b>@{$getMe->username}</b>";

            $text[] = "";

            $text[] = "-------------------";
            $text[] = "🌐 <b>WebHook</b>";
            $text[] = "-------------------";
            $text[] = "<i>IP:</i> <b>{$getWebhookInfo->ip_address}</b>";
            $text[] = "<i>Host:</i> <b>" . parse_url($getWebhookInfo->url, PHP_URL_HOST) . "</b>";
            $this->replyWithMessage([
                "text" => makeText($text),
                "parse_mode" => "html",
            ]);
        } catch (TelegramSDKException|Exception $e) {
            $this->replyWithMessage([
                "text" => "Не получилось собрать данные!",
                "parse_mode" => "html",
            ]);
        }
    }
}