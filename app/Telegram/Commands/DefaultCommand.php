<?php

namespace App\Telegram\Commands;

use App\Telegram\Dialogs\DefaultDialog;
use Telegram\Bot\Actions;


/**
 * Class HelpCommand.
 */
class DefaultCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'default';

    /**
     * @var string Command Description
     */
    protected $description = 'Данные по умолчанию';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $this->dialogs()->add(new DefaultDialog($this->getUpdate(), $this->getUser()));
    }
}