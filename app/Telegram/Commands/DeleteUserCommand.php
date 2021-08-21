<?php

namespace App\Telegram\Commands;

use App\Models\Role;
use App\Models\TelegramUser;
use App\Telegram\Dialogs\DeleteUserDialog;
use Telegram\Bot\Actions;

/**
 * Class HelpCommand.
 */
class DeleteUserCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'deleteUser';

    /**
     * @var string Command Description
     */
    protected $description = 'Удалить Пользователя';
    protected $permissionName = Role::ADMIN;
    protected $pattern = '{telegram_id}';

    /**
     * {@inheritdoc}
     */
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