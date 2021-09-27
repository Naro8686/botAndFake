<?php

namespace App\Exceptions;

use App\Http\Controllers\Telegram\BotController;
use App\Models\TelegramUser;
use Exception;
use Log;

class TelegramUserPermissionException extends Exception
{

    /**
     * @var TelegramUser|null
     */
    protected $user;

    public function __construct(?TelegramUser $user, $message = "", $code = 0)
    {
        parent::__construct($message, $code);
        $this->user = $user;
    }

    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        try {
            $telegram = BotController::getTelegram();
            $update = $telegram->getWebhookUpdate();
            $user = $this->user;
            if (!is_null($user)) $user->sendMessage([
                "text" => $this->getMessage(),
                "parse_mode" => "html"
            ]);
            else $telegram->sendMessage([
                "chat_id" => $update->getChat()->getId(),
                "text" => $this->getMessage(),
                "parse_mode" => "html"
            ]);
        } catch (Exception $e) {
            Log::error("TelegramUserPermissionException {$e->getMessage()}");
        }
    }
}
