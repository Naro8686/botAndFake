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
            $domain = parse_url($telegram->getWebhookInfo()->url, PHP_URL_HOST);
        } catch (TelegramSDKException | \Exception $e) {
            $domain = "Не получилось узнать домен !";
        }

        $this->replyWithMessage([
            "text" => "️🌐 <b>$domain</b>",
            "parse_mode" => "html",
        ]);
    }
}