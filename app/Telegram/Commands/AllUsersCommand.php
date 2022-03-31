<?php

namespace App\Telegram\Commands;

use Log;
use App\Models\Role;
use App\Models\TelegramUser;
use Illuminate\Contracts\Pagination\Paginator;
use Throwable;


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
        try {
            $users = TelegramUser::whereHas('role', function ($query) {
                $query->where('name', '<>', Role::ADMIN);
            })->where('id', '<>', $this->getUser()->id)->simplePaginate(10);
            $this->pagination($users, "👥 <b>$this->description</b>");
        } catch (Throwable $e) {
            Log::error("AllUsersCommand {$e->getMessage()}");
        }
    }

    public static function renderBtn(Paginator $paginator): array
    {
        $buttons = [];
        foreach ($paginator as $user) {
            $buttons[] = [["text" => "$user->id | {$user->getRoleName()}", "callback_data" => "/findProfile $user->id"]];
        }
        return $buttons;
    }
}
