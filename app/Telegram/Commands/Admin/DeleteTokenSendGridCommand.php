<?php

namespace App\Telegram\Commands\Admin;

use App\Models\Sendgrid;
use App\Telegram\Dialogs\DeleteTokenSendGridDialog;
use Telegram\Bot\Actions;

class DeleteTokenSendGridCommand extends BaseAdminCommand
{
    protected $name = 'deleteToken';
    protected $description = 'Удалить Sendgrid token';

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
