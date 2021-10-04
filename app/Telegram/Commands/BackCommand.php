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
        $user = $this->getUser();
        try {
            if ($user->dialogExists()) {
                $dialog = $this->dialogs->get($this->getUpdate());
                if (!$dialog) throw new TelegramSDKException();
                $backNum = ($dialog->getNext() - 2);
                if ($backNum < 0) throw new TelegramSDKException();
                else $user->dialogSetField('next', $backNum);
            } else  throw new TelegramSDKException();
        } catch (TelegramSDKException | \Exception $e) {
            $user->deleteDialog();
            $this->triggerCommand('start');
        }
    }
}