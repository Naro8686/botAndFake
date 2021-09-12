<?php

namespace App\Telegram\Commands;

use App\Models\Role;
use App\Models\TelegramUser;
use Telegram\Bot\Actions;


/**
 * Class HelpCommand.
 */
class AlertCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'alert';

    /**
     * @var string Command Description
     */
    protected $description = 'Alert';
    protected $customRegex = '/\{(.+?)\}/';
    protected $pattern = '{text}';
    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $text = $this->getArguments()['text'] ?? null;
        if (is_null($text)) return;
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $users = TelegramUser::where('id', '<>', $this->getUser()->id)->get();

        if (!empty($users)) foreach ($users as $user) $user->sendMessage([
            "text" => $text,
            "parse_mode" => "html",
        ]);
        else $this->getUser()->sendMessage([
            "text" => "❕ <i>Пользователей не найдено</i>",
            "parse_mode" => "html",
        ]);
    }
}