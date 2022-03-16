<?php

namespace App\Telegram\Commands;

use Cache;
use Exception;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Actions;


class IsOnlineCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'is_online';

    protected $pattern = '{uuid}';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        try {
            $this->replyWithChatAction(['action' => Actions::TYPING]);
            $uuid = $this->getArguments()['uuid'] ?? null;
            $text = [];
            if ($uuid) {
                if (Cache::has("$uuid.is_online")) {
                    $online_date = Cache::get("$uuid.is_online");
                    $text[] = "🟢 <b>В сети</b> : <i>$online_date</i>";
                } else $text[] = "🔴 <b>Не в сети</b>";
            } else $text[] = "❗️ <b>Не указан {uuid} пользователя</b>";

            $this->replyWithMessage([
                "text" => makeText($text),
                "parse_mode" => "html",
            ]);
        } catch (Exception $exception) {
            Log::error("IsOnlineCommand:{$exception->getMessage()}");
        }
    }
}
