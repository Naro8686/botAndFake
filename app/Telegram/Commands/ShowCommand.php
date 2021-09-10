<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Actions;


/**
 * Class HelpCommand.
 */
class ShowCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'show';

    /**
     * @var string Command Description
     */
    protected $description = '🌕 <b>Показано</b>';

    //protected $pattern = '{visibly}';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $user = $this->getUser();
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $user->visibly = true;
        if ($user->save()) $this->replyWithMessage([
            "text" => $this->description,
            "parse_mode" => "html",
        ]);
        $this->triggerCommand('settings');
    }
}