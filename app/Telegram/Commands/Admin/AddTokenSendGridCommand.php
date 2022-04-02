<?php

namespace App\Telegram\Commands\Admin;

use App\Telegram\Dialogs\AddTokenSendGridDialog;
use Telegram\Bot\Actions;


class AddTokenSendGridCommand extends BaseAdminCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'addToken';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $this->dialogs()->add(new AddTokenSendGridDialog($this->getUpdate(), $this->getUser()));
    }
}
