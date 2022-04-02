<?php

namespace App\Telegram\Commands\Admin;

use App\Telegram\Dialogs\AlertDialog;
use Telegram\Bot\Actions;


class AlertCommand extends BaseAdminCommand
{
    protected $name = 'alert';

    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $this->dialogs()->add(new AlertDialog($this->getUpdate(), $this->getUser()));
    }
}
