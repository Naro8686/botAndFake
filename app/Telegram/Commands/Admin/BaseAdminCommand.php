<?php

namespace App\Telegram\Commands\Admin;

use App\Models\Role;
use App\Telegram\Commands\BaseCommand;


/**
 * Class HelpCommand.
 */
abstract class BaseAdminCommand extends BaseCommand
{
    protected $permissionName = Role::ADMIN;
}
