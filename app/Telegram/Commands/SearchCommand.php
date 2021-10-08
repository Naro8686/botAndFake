<?php

namespace App\Telegram\Commands;

use App\Models\Fake;
use App\Models\TelegramUser;
use App\Models\Role;
use Cache;
use Exception;
use Log;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;


/**
 * Class HelpCommand.
 */
class SearchCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'search';

    protected $pattern = '{table}{value}';

    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        try {
            $seconds = 60;
            $table = $this->getArguments()['table'] ?? null;
            $value = $this->getArguments()['value'] ?? null;
            $user = $this->getUser();
            if (!(is_null($table) || is_null($value))) {
                Cache::put("search.table.$user->id", $table, $seconds);
                Cache::put("search.value.$user->id", $value, $seconds);
            }
            $table = $table ?? Cache::get("search.table.$user->id");
            $value = $value ?? Cache::get("search.value.$user->id");

            $this->replyWithChatAction(['action' => Actions::TYPING]);
            $buttons = [];
            $items = collect();
            switch ($table) {
                case "fakes":
                    $items = Fake::where("track_id", "LIKE", "%$value%")->simplePaginate(10);
                    $buttons = FakesCommand::renderBtn($items, 'search');
                    break;
                case "users":
                    $items = TelegramUser::whereId($value)
                        ->orWhere(function ($query) use ($value) {
                            $val = str_replace('@', '', $value);
                            $query->where('username', 'LIKE', '%' . $val . '%')
                                ->orWhere('first_name', 'LIKE', '%' . $val . '%')
                                ->orWhere('last_name', 'LIKE', '%' . $val . '%');
                        })->whereDoesntHave('role', function ($query) {
                            $query->where('name', Role::ADMIN);
                        })->simplePaginate(10);
                    $buttons = AllUsersCommand::renderBtn($items, 'search');
                    break;
            }
            if (!empty($buttons) && $items->isNotEmpty()) {
                $telegram = $this->getTelegram();
                $update = $this->getUpdate();
                $message = $update->getMessage();
                $chat_id = $message->getChat()->getId();
                $keyboard = Keyboard::make([
                    "inline_keyboard" => $buttons,
                    "resize_keyboard" => true,
                ]);

                if ($this->hasPagination) $telegram->editMessageReplyMarkup([
                    "parse_mode" => "html",
                    "message_id" => $message->messageId,
                    "chat_id" => $chat_id,
                    "reply_markup" => $keyboard
                ]);
                else $this->replyWithMessage([
                    "text" => "🔍 <b>Вот что я нашел по запросу</b>",
                    "parse_mode" => "html",
                    "reply_markup" => $keyboard
                ]);
            } else $this->replyWithMessage([
                "text" => "По значению <b>$value</b> ничего не найдено!",
                "parse_mode" => "html",
            ]);
        } catch (TelegramSDKException | Exception $e) {
            Log::error("SearchCommand {$e->getMessage()}");
        }
    }
}
