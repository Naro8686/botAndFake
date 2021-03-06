<?php

namespace App\Telegram\Commands;

use App\Telegram\Dialogs\DeleteAllFakesDialog;
use Telegram\Bot\Actions;

class DeleteFakesCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'deleteFakes';

    /**
     * @var string Command Description
     */
    protected $description = 'Удалить объявление';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $user = $this->getUser();
        $fakes = $user->fakes()->get();
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        if ($fakes->isEmpty()) $this->replyWithMessage([
            "text" => "❕ <i>Объявления нет</i>",
            "parse_mode" => "html",
        ]);
        else {
            $dialog = new DeleteAllFakesDialog($this->getUpdate(), $user);
            $dialog->setMemory(json_encode(['ids' => $fakes->pluck('id')->implode(',')]));
            $this->dialogs()->add($dialog);
        }
    }
}
