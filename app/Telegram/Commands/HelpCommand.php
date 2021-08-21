<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Keyboard\Keyboard;

/**
 * Class HelpCommand.
 */
class HelpCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'help';

    /**
     * @var array Command Aliases
     */
    protected $aliases = ['notfound'];

    /**
     * @var string Command Description
     */
    protected $description = 'Команда не существует';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $this->replyWithMessage([
            "text" => "⁉️ <b><i>$this->description</i></b>",
            "parse_mode" => "html",
        ]);
    }
}