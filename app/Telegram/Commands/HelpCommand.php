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
    protected $aliases = ['notfound','not_found'];

    /**
     * @var string Command Description
     */
    protected $description = 'Команда не существует';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->getUser()->deleteDialog();
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $reply_markup = Keyboard::make([
            "keyboard" => [[["text" => $this->getConfig('btns.start') ?? '']]],
            "resize_keyboard" => true,
            "one_time_keyboard" => false,
        ]);
        $this->replyWithMessage([
            "text" => "⁉️ <b><i>$this->description</i></b>",
            "parse_mode" => "html",
            "reply_markup" => $reply_markup,
        ]);
    }
}
