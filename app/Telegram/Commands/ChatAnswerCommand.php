<?php

namespace App\Telegram\Commands;

use App\Models\Fake;
use App\Telegram\Dialogs\ChatAnswerDialog;
use Telegram\Bot\Actions;


class ChatAnswerCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'chat_answer';
    protected $pattern = '{track_id}';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $track_id = $this->getArguments()['track_id'];
        $fake = Fake::whereTrackId($track_id)->first();
        $user = $this->getUser();
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        if (!is_null($fake) && ($user->isAdmin() || $fake->telegram_id === $user->id)) {
            $dialog = new ChatAnswerDialog($this->getUpdate(), $this->getUser());
            $dialog->setMemory(json_encode(['track_id' => $track_id]));
            $this->dialogs()->add($dialog);
        } else {
            $this->replyWithMessage([
                "text" => "❗️ <b>Такой объявление не существует!</b>",
                "parse_mode" => "html",
            ]);
        }
    }
}
