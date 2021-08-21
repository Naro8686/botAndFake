<?php

namespace App\Telegram\Commands;

use App\Models\Fake;
use App\Models\Role;
use App\Models\TelegramUser;
use Telegram\Bot\Actions;
use Telegram\Bot\Keyboard\Keyboard;


/**
 * Class HelpCommand.
 */
class AllUsersCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'allUsers';

    /**
     * @var string Command Description
     */
    protected $description = 'Другие пользователи';
    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $users = TelegramUser::whereHas('role', function ($query) {
            $query->where('name', '<>', Role::ADMIN);
        })
            ->where('id', '<>', $this->getUser()->id)
            ->get();
        if ($users->isEmpty()) {
            $this->replyWithMessage([
                "text" => "❕ <i>Пусто</i>",
                "parse_mode" => "html",
            ]);
        } else {
            $buttons = [];
            foreach ($users as $user) {
                $buttons[] = [["text" => "$user->id | {$user->getRoleName()}", "callback_data" => "/findProfile $user->id"]];
            }
            $keyboard = Keyboard::make([
                "inline_keyboard" => $buttons,
                "resize_keyboard" => true,
            ]);
            $this->replyWithMessage([
                "text" => "👥 <b>$this->description</b>",
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);
        }
    }
}