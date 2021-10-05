<?php

namespace App\Telegram\Commands;

use App\Models\Fake;
use App\Models\TelegramUser;
use App\Models\Role;
use Telegram\Bot\Actions;
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
        $table = $this->getArguments()['table'];
        $value = trim($this->getArguments()['value']);
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $buttons = [];
        $items = collect();
        switch ($table) {
            case "fakes":
                $items = Fake::where("track_id", "LIKE", "%$value%")->get();
                $buttons = FakesCommand::renderBtn($items);
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
                    })->get();
                $buttons = AllUsersCommand::renderBtn($items);
                break;
        }
        if (!empty($buttons) && $items->isNotEmpty()) {
            $keyboard = Keyboard::make([
                "inline_keyboard" => $buttons,
                "resize_keyboard" => true,
            ]);
            $this->replyWithMessage([
                "text" => "🔍 <b>Вот что я нашел по запросу</b>",
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);
        } else $this->replyWithMessage([
            "text" => "По значению <b>$value</b> ничего не найдено!",
            "parse_mode" => "html",
        ]);
    }
}
