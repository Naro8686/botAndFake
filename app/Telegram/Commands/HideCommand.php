<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Actions;


/**
 * Class HelpCommand.
 */
class HideCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'hide';

    /**
     * @var string Command Description
     */
    protected $description = '🌑 <b>Скрыто</b>';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $user = $this->getUser();
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $user->visibly = false;
        if ($user->save()) $this->replyWithMessage([
            "text" => $this->description,
            "parse_mode" => "html",
        ]);
        $this->triggerCommand('settings');
    }
}