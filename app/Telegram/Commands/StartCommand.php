<?php

namespace App\Telegram\Commands;

use Log;
use Telegram\Bot\Actions;
use Telegram\Bot\Keyboard\Keyboard;
use Throwable;


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
        try {
            $this->replyWithChatAction(['action' => Actions::TYPING]);
            $keyboard = [];

            $btns = $this->getConfig('btns');
            $user = $this->getUser();
            $user->deleteDialog();

            if ($user->isActive()) {
                $keyboard[] = [["text" => $btns->get('profile', '')], ["text" => $btns->get('fakes', '')]];
                if ($user->isAdmin()) {
                    $keyboard[] = [["text" => $btns->get('allUsers', '')], ["text" => $btns->get('deleteAllFakes', '')]];
                }
                $keyboard[] = [["text" => $btns->get('createFake', '')]];
                $keyboard[] = [["text" => $btns->get('instruments', '')]];
            } else $keyboard[] = [["text" => $btns->get('request', '')]];

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
        } catch (Throwable $throwable) {
            Log::error("StartCommand: {$throwable->getMessage()}");
        }
    }

}
