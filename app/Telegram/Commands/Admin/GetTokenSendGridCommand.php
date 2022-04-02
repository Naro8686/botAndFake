<?php

namespace App\Telegram\Commands\Admin;

use App\Api\SendGridApi;
use App\Models\Category;
use App\Models\Sendgrid;
use Telegram\Bot\Actions;
use Throwable;


class GetTokenSendGridCommand extends BaseAdminCommand
{
    protected $name = 'getToken';
    protected $description = 'Get current SendGrid token';

    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        try {
            $text = [];
            $sendgrid = Sendgrid::first();
            $text[] = "-------------------";
            $text[] = "✉️ <i>SendGrid</i>";
            $text[] = "-------------------";
            $text[] = "<b>ID</b>: <code>{$sendgrid->id}</code>";
            $text[] = "<b>Domain</b>: <code>{$sendgrid->domain}</code>";
            $text[] = "<b>Token</b>: <code>{$sendgrid->token}</code>";
            $category = Category::first();
            $mail = setting("{$category->name}_email");
            list(, $domain) = array_pad(explode('@', $mail), 2, null);
            $text[] = "";
            $text[] = "-------------------";
            $text[] = "📬 <i>Используемый домен отправителя</i>";
            $text[] = "-------------------";
            $text[] = "<b>Domain </b>: <code>$domain</code>";
            $sendGridApi = new SendGridApi($sendgrid->token);
            $response = $sendGridApi->userCredits();
            $data = $response->getData();
            $text[] = "";
            $text[] = "-------------------";
            $text[] = "🌐 <i>API</i>";
            $text[] = "-------------------";
            if ($response->getStatusCode() === 403) {
                $text[] = "❗️ <b>$data->msg</b>";
            } elseif (!$data->error && $data->count < 1) {
                $text[] = "❗️ <b>Лимит исчерпан</b>";
            } elseif ($data->error) {
                $text[] = "❗️ <b>$data->msg</b>";
            } else {
                $text[] = "💰 <b>Количество оставшихся письм</b>: <code>$data->count</code>";
            }
            $this->replyWithMessage([
                "text" => makeText($text),
                "parse_mode" => "html",
            ]);
        } catch (Throwable $e) {
            $this->replyWithMessage([
                "text" => Sendgrid::count()
                    ? "❗️ <b>Не смог получить данные, попробуйте чуть позже</b>"
                    : [
                        "❗️ <b>Пусто! Токенов больше нет.</b>",
                        "❗️ <b>Добавить ?</b> <code>/addToken</code>"
                    ],
                "parse_mode" => "html",
            ]);
        }
    }
}
