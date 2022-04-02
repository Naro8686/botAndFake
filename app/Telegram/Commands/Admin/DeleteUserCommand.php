<?php

namespace App\Telegram\Commands\Admin;

use App\Models\TelegramUser;
use App\Telegram\Dialogs\DeleteUserDialog;
use Telegram\Bot\Actions;

class DeleteUserCommand extends BaseAdminCommand
{
    protected $name = 'deleteUser';
    protected $description = 'Удалить Пользователя';
    protected $pattern = '{telegram_id}';

    public function handle()
    {
        $telegram_id = $this->getArguments()['telegram_id'];
        $user = TelegramUser::find($telegram_id);
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        if (is_null($user)) {
            $this->replyWithMessage([
                "text" => "❕ <i>Пользователя не найден</i>",
                "parse_mode" => "html",
            ]);
        } else {
            $dialog = new DeleteUserDialog($this->getUpdate(), $this->getUser());
            $dialog->setMemory(json_encode(['telegram_id' => $telegram_id]));
            $this->dialogs()->add($dialog);
        }
    }
}
