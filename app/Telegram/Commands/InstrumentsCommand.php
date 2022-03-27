<?php

namespace App\Telegram\Commands;

use Log;
use Telegram\Bot\Actions;
use Telegram\Bot\Keyboard\Keyboard;
use Throwable;


class InstrumentsCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = "instruments";

    /**
     * @var string Command Description
     */
    protected $description = "Инструменты";

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

            $keyboard[] = [["text" => $btns->get('deliveryInfo','')]];
            $keyboard[] = [["text" => $btns->get('back','')]];

            $reply_markup = Keyboard::make([
                "keyboard" => $keyboard,
                "resize_keyboard" => true,
                "one_time_keyboard" => false,
            ]);

            $this->replyWithMessage([
                "text" => "<b>$this->description</b>",
                "parse_mode" => "html",
                "reply_markup" => $reply_markup,
            ]);
        } catch (Throwable $throwable) {
            Log::error("InstrumentsCommand: {$throwable->getMessage()}");
        }
    }

}
