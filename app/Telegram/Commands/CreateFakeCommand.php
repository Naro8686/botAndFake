<?php

namespace App\Telegram\Commands;

use App\Telegram\Dialogs\CreateFakeDialog;
use Telegram\Bot\Actions;


/**
 * Class HelpCommand.
 */
class CreateFakeCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'createFake';

    /**
     * @var string Command Description
     */
    protected $description = 'Создать объявления ';

    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $this->dialogs()->add(new CreateFakeDialog($this->getUpdate(),$this->getUser()));
    }
}