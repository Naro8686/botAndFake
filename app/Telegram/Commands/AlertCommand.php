<?php

namespace App\Telegram\Commands;

use App\Models\Role;
use App\Models\TelegramUser;
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

    /**
     * @var string Command Description
     */
    protected $description = 'Alert';

    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->dialogs()->add(new AlertDialog($this->getUpdate(), $this->getUser()));
    }
}