<?php

namespace App\Telegram\Commands;

use App\Models\Role;
use App\Models\TelegramUser;
use Telegram\Bot\Actions;
use Telegram\Bot\Keyboard\Keyboard;

/**
 * Class HelpCommand.
 */
class FindProfileCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'findProfile';

    /**
     * @var array Command Aliases
     */

    /**
     * @var string Command Description
     */
    protected $description = 'Найти пользователя';
    protected $permissionName = Role::ADMIN;
    protected $pattern = '{telegram_id}';

    public function handle()
    {
        $telegram_id = $this->getArguments()['telegram_id'] ?? null;
        $user = TelegramUser::find($telegram_id);
        if (is_null($user)) return;
        $this->replyWithMessage([
            'text' => '🕓 <i><b>Загружаю информацию о профиле!</b></i>',
            "parse_mode" => "html"
        ]);
        $btns = $this->getConfig('btns');
        $info = $user->info();
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $text = makeText([
            "🗽 <i>Ник:</i> <a href='tg://user?id={$info['id']}'><b>{$info['name']}</b></a>",
            "🆔 <i>ID:</i> <b>{$info['id']}</b>",
//                "⚖️ <i>Ставка:</i> <b>70% / 65%</b>",
            "🗂 <i>Активных объявлений:</i> <b>{$info['fakeCount']}</b>",
            "👨‍👦 <i>Пригласил:</i> <b>{$info['invited']}</b>",
            "👨‍👦‍👦 <i>Приглашено воркеров:</i> <b>{$info['refCount']}</b>",
            "⭐️ <i>Статус:</i> <b>{$info['status']}</b>",
            "📆 <i>Вступил в команду:</i> <b>{$info['regDate']}</b>",
        ]);

        $keyboard = [];
        $keyboard[] = [["text" => $btns->get('delete') ?? '', "callback_data" => "/deleteUser $user->id"]];
        if ($user->banned()) {
            $keyboard[] = [["text" => $btns->get('unlock') ?? '', "callback_data" => "/unlock $user->id"]];
        } else {
            $keyboard[] = [["text" => $btns->get('lock') ?? '', "callback_data" => "/lock $user->id"]];
        }
        $roles = Role::get();
        $buttons = [];
        foreach ($roles as $role) {
            $name = $role->id === $user->role_id ? "{$role->getRoleName()} *" : $role->getRoleName();
            $buttons[] = ["text" => $name, "callback_data" => "/changeStatus $user->id $role->name"];
        }
        $keyboard[] = $buttons;
        $reply_markup = Keyboard::make([
            "inline_keyboard" => $keyboard,
            "resize_keyboard" => true,
        ]);

        $this->replyWithMessage([
            "text" => $text,
            "parse_mode" => "html",
            "reply_markup" => $reply_markup,
        ]);
    }
}