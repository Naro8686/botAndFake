<?php

namespace App\Telegram\Commands\Admin;

use App\Models\Fake;
use App\Telegram\Dialogs\DeleteAllFakesDialog;
use Telegram\Bot\Actions;

class DeleteAllFakesCommand extends BaseAdminCommand
{
    protected $name = 'deleteAllFakes';
    protected $description = 'Удалить все объявление';

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
