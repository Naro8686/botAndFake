<?php

namespace App\Telegram\Commands;

use App\Models\Fake;
use App\Telegram\Dialogs\SendDialog;
use Exception;
use Log;
use Telegram\Bot\Actions;

/**
 * Class HelpCommand.
 */
class SendCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'send';

    /**
     * @var string Command Description
     */
    protected $description = 'Отправить';
    protected $pattern = '{type}{track_id}';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        try {
            $type = $this->getArguments()['type'];
            $track_id = $this->getArguments()['track_id'];
            $fake = Fake::whereTrackId($track_id)->first();
            $user = $this->getUser();
            $this->replyWithChatAction(['action' => Actions::TYPING]);
            if (!is_null($fake) && ($user->isAdmin() || $fake->telegram_id === $user->id)) {
                $dialog = new SendDialog($this->getUpdate(), $this->getUser());
                $dialog->setMemory(json_encode(['track_id' => $track_id, 'type' => $type]));
                $this->dialogs()->add($dialog);
            } else $this->replyWithMessage([
                "text" => "❗️ <b>Такой объявление не существует!</b>",
                "parse_mode" => "html",
            ]);
        } catch (Exception $exception) {
            Log::error("Command name:{$this->getName()} {$exception->getMessage()}");
        }
    }
}