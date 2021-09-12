<?php

namespace App\Telegram\Commands;

use App\Models\Role;
use App\Telegram\Dialogs\AlertDialog;
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

    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
//        $this->replyWithMessage([
//            "text" => "❕<i>Напишите сообщения",
//            "parse_mode" => "html",
//        ]);
        $this->dialogs()->add(new AlertDialog($this->getUpdate(), $this->getUser()));
    }
}