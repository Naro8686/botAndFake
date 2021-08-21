<?php

namespace App\Telegram\Commands;


use Telegram\Bot\Exceptions\TelegramSDKException;

/**
 * Class HelpCommand.
 */
class BackCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'back';

    /**
     * @var string Command Description
     */
    protected $description = 'Назад';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        try {
            $dialogs = $this->dialogs;
            $update = $this->getUpdate();
            if ($dialogs->exists($update)) {
                $dialog = $dialogs->get($update);
                $backNum = ($dialog->getNext() - 2);
                if ($backNum < 0) throw new TelegramSDKException();
                else $dialog->getUser()->dialogSetField('next', $backNum);
            } else  throw new TelegramSDKException();
        } catch (TelegramSDKException $e) {
            $this->triggerCommand('start');
        }
    }
}