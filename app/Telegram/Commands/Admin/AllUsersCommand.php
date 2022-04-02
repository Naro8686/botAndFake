<?php

namespace App\Telegram\Commands\Admin;

use App\Models\Role;
use App\Models\TelegramUser;
use Illuminate\Contracts\Pagination\Paginator;
use Log;
use Throwable;


/**
 * Class HelpCommand.
 */
class AllUsersCommand extends BaseAdminCommand
{
    protected $name = 'allUsers';
    protected $description = 'Другие пользователи';

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
            $buttons[] = [["text" => "{$user->getName(true)}[$user->id] | {$user->getRoleName()}", "callback_data" => "/findProfile $user->id"]];
        }
        return $buttons;
    }
}
