<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Keyboard\Keyboard;


class StartCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = "start";

    /**
     * @var string Command Description
     */
    protected $description = "Пуск";

    /**
     * @inheritdoc
     */
    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $keyboard = [];

        $btns = $this->getConfig('btns');
        $user = $this->getUser();
        $user->deleteDialog();
        
        if ($user->isActive()) {
            $keyboard[] = [["text" => $btns->get('profile') ?? ''], ["text" => $btns->get('fakes') ?? '']];
            if ($user->isAdmin()) $keyboard[] = [["text" => $btns->get('allUsers') ?? ''], ["text" => $btns->get('allFakes') ?? '']];
            $keyboard[] = [["text" => $btns->get('createFake') ?? '']];
        } else $keyboard[] = [["text" => $btns->get('request') ?? '']];

        $reply_markup = Keyboard::make([
            "keyboard" => $keyboard,
            "resize_keyboard" => true,
            "one_time_keyboard" => false,
        ]);

        $this->replyWithMessage([
            "text" => "<code>[</code><b>🙈 🙉 🙊</b><code>]</code>",
            "parse_mode" => "html",
            "reply_markup" => $reply_markup,
        ]);
    }

}