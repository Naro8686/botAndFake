<?php

namespace App\Telegram\Commands;

use App\Telegram\Dialogs\RequestDialog;
use Telegram\Bot\Actions;
use Telegram\Bot\Keyboard\Keyboard;

class RequestCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = "request";

    /**
     * @var string Command Description
     */
    protected $description = "Подать заявку";

    /**
     * @inheritdoc
     */
    public function handle()
    {
        $btns = $this->getConfig('btns');
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $user = $this->getUser();
        $user->deleteDialog();
        $keyboard = [[["text" => $btns->get('start') ?? '']]];
        if ($user->isActive()) {
            $text = "🔰 <b>Ваш аккаунт активирован</b>";
        } elseif ($user->request()->exists()) {
            $text = "❕ <i>Вы подали заявку , ожидайте ответа</i>";
        } else {
            $this->dialogs()->add(new RequestDialog($this->getUpdate(), $this->getUser()));
        }
        if (isset($text)) {
            $reply_markup = Keyboard::make([
                "keyboard" => $keyboard,
                "resize_keyboard" => true,
                "one_time_keyboard" => true,
            ]);
            $this->replyWithMessage([
                "text" => $text,
                "parse_mode" => "html",
                "reply_markup" => $reply_markup,
            ]);
        }
    }
}