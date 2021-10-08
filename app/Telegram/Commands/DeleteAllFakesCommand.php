<?php

namespace App\Telegram\Commands;

use App\Models\Fake;
use App\Models\Role;
use App\Telegram\Dialogs\DeleteAllFakesDialog;
use App\Telegram\Dialogs\DeleteUserDialog;
use Telegram\Bot\Actions;

/**
 * Class HelpCommand.
 */
class DeleteAllFakesCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'deleteAllFakes';

    /**
     * @var string Command Description
     */
    protected $description = 'Удалить все объявление';

    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $fakes = Fake::get();
        if ($fakes->isEmpty()) $this->replyWithMessage([
            "text" => "❕ <i>Объявления нет</i>",
            "parse_mode" => "html",
        ]);
        else {
            $dialog = new DeleteAllFakesDialog($this->getUpdate(), $this->getUser());
            $dialog->setMemory(json_encode(['ids' => $fakes->pluck('id')->implode(',')]));
            $this->dialogs()->add($dialog);
        }
    }
}
