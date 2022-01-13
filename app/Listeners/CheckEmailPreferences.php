<?php

namespace App\Listeners;

use App\Api\SendGridApi;
use App\Models\Category;
use App\Models\Role;
use App\Models\Sendgrid;
use App\Models\Setting;
use App\Models\TelegramUser;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Events\MessageSending;
use Illuminate\Queue\InteractsWithQueue;
use Telegram\Bot\Exceptions\TelegramSDKException;

class CheckEmailPreferences
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param MessageSending $event
     * @return void
     */
    public function handle(MessageSending $event)
    {
        $default = config('mail.default');
        if ($default === 'sendgrid') {
            $messages = [];
            if ($sendgrid = Sendgrid::first()) {
                $api = new SendGridApi($sendgrid->token);
                $response = $api->userCredits();
                $data = $response->getData();
                if ($response->getStatusCode() === 403 || (!$data->error && $data->count < 1)) {
                    $messages[] = "⏳ <i>Выполняется замена токена</i>";
                    $messages[] = "----------------------";
                    $messages[] = "<b>Причина</b> : " . ($response->getStatusCode() === 403 ? "<b>$data->msg</b>" : "<b>Лимит исчерпан</b>");
                    $old = $sendgrid;
                    $sendgrid->delete();
                    if ($new = Sendgrid::first()) {
                        $categories = Category::get();
                        if (!empty($categories) && !empty($new->domain)) {
                            $messages[] = "<b>$old->domain</b> сменился на <b>$new->domain</b>";
                            foreach ($categories as $category) {
                                $email = "$category->name@$new->domain";
                                $field = "{$category->name}_email";
                                Setting::add($field, $email, Setting::getDataType($field));
                            }
                        }
                    } else $messages[] = "<b>Новых токенов не найдено!</b>";
                }
            }
            if (!empty($messages)) User::whereHas('role', function ($query) {
                $query->where('name', '=', Role::ADMIN);
            })->whereHas('telegram')->get()->each(function ($user) use ($messages) {
                try {
                    /** @var TelegramUser $telegramUser */
                    $telegramUser = $user->telegram;
                    $messages[] = " ----------------------";
                    $telegramUser->sendMessage([
                        "text" => makeText($messages),
                        "parse_mode" => "html",
                    ]);
                } catch (TelegramSDKException $exception) {
                    \Log::error($exception->getMessage());
                }
            });
        }
    }
}
