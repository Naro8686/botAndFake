<?php

namespace App\Telegram\Commands;

use App\Models\Role;
use App\Telegram\Dialogs\AddTokenSendGridDialog;
use Telegram\Bot\Actions;


/**
 * Class HelpCommand.
 */
class AddTokenSendGridCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'addToken';

    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $this->dialogs()->add(new AddTokenSendGridDialog($this->getUpdate(), $this->getUser()));
    }
}