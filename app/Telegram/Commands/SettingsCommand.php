<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Keyboard\Keyboard;

/**
 * Class HelpCommand.
 */
class SettingsCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'settings';

    /**
     * @var string Command Description
     */
    protected $description = 'Настройки пользователя';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $btns = $this->getConfig('btns');
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $user = $this->getUser();
        $keyboard = Keyboard::make([
            "keyboard" => [
                [
                    $user->visibly ? ["text" => $btns->get('hide') ?? ''] : ["text" => $btns->get('show') ?? ''],
                    ["text" => $btns->get('default') ?? ''],
                ],
                [
                    ["text" => $btns->get('back') ?? ''],
                ],
            ],
            "resize_keyboard" => true,
        ]);
        $this->replyWithMessage([
            "text" => "🛠 <b>$this->description</b>",
            "parse_mode" => "html",
            "reply_markup" => $keyboard
        ]);
    }
}