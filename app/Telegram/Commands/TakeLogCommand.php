<?php

namespace App\Telegram\Commands;

use App\Models\Fake;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;


/**
 * Class HelpCommand.
 */
class TakeLogCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'takeLog';

    /**
     * @var string Command Description
     */
    protected $description = 'Взять лог';
    protected $pattern = '{track_id}';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $track_id = $this->getArguments()['track_id'] ?? null;
        $user = $this->getUser();
        $fake = Fake::whereTrackId($track_id)->first();

        if (!is_null($fake) && $user->fakes()->where('track_id', $track_id)->doesntExist() && $user->takeFakes()->where('track_id', $track_id)->doesntExist()) {
            $text = "{$user->accountLink()} Взял лог под трек номером <b>$track_id</b>";
            $user->takeFakes()->sync([$fake->id]);
        } else return;
        $this->replyWithChatAction(['action' => Actions::TYPING]);

        if ($alertGroupId = $this->getConfig('groups.alert.id')) try {
            $this->getTelegram()->sendMessage([
                "chat_id" => $alertGroupId,
                "text" => $text,
                "parse_mode" => "html",
            ]);
        } catch (TelegramSDKException $e) {
            \Log::error($e->getMessage());
        }
    }
}