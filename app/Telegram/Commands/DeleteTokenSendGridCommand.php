<?php

namespace App\Telegram\Commands;

use App\Models\Role;
use App\Models\Sendgrid;
use App\Telegram\Dialogs\DeleteTokenSendGridDialog;
use Telegram\Bot\Actions;

/**
 * Class HelpCommand.
 */
class DeleteTokenSendGridCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'deleteToken';

    /**
     * @var string Command Description
     */
    protected $description = 'Удалить Sendgrid token';
    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $sendgrid = Sendgrid::first();
        if (!is_null($sendgrid)) {
            $dialog = new DeleteTokenSendGridDialog($this->getUpdate(), $this->getUser());
            $dialog->setMemory(json_encode(['sendgrid_id' => $sendgrid->id]));
            $this->dialogs()->add($dialog);
        } else {
            $this->replyWithMessage([
                "text" => "❗️ <b>Пусто!</b>",
                "parse_mode" => "html",
            ]);
        }
    }
}