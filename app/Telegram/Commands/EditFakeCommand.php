<?php

namespace App\Telegram\Commands;

use App\Models\Fake;
use App\Telegram\Dialogs\EditFakeDialog;
use Telegram\Bot\Actions;


/**
 * Class HelpCommand.
 */
class EditFakeCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'editFake';

    /**
     * @var string Command Description
     */
    protected $description = 'Изменить объявление';
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
            $dialog = new EditFakeDialog($this->getUpdate(), $this->getUser());
            $dialog->setMemory(json_encode(['fake' => $fake->toArray()]));
            $this->dialogs()->add($dialog);
        } else {
            $this->replyWithMessage([
                "text" => "❗️ <b>Такой объявление не существует!</b>",
                "parse_mode" => "html",
            ]);
        }
    }
}