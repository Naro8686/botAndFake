<?php

namespace App\Telegram\Commands;

use App\Models\Fake;
use App\Models\Role;
use Exception;
use Log;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;


/**
 * Class HelpCommand.
 */
class AllFakesCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'allFakes';

    /**
     * @var string Command Description
     */
    protected $description = 'Объявления';
    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        try {
            $telegram = $this->getTelegram();
            $update = $this->getUpdate();
            $message = $update->getMessage();
            $chat_id = $message->getChat()->getId();

            $this->replyWithChatAction(['action' => Actions::TYPING]);
            $ids = $this->getUser()->fakes()->pluck('id');
            $fakes = Fake::whereNotIn('id', $ids->toArray())->simplePaginate(10);

            if ($fakes->isEmpty()) {
                $this->replyWithMessage([
                    "text" => "📂 <b>Объявление не найдено</b>",
                    "parse_mode" => "html",
                ]);
            } else {
                $buttons = FakesCommand::renderBtn($fakes, 'allFakes');
                $buttons[] = [["text" => $this->getConfig('btns.deleteAllFakes') ?? '', "callback_data" => "/deleteAllFakes"]];
                $keyboard = Keyboard::make([
                    "inline_keyboard" => $buttons,
                    "resize_keyboard" => true,
                ]);
                if ($this->hasPagination) $telegram->editMessageReplyMarkup([
                    "parse_mode" => "html",
                    "message_id" => $message->messageId,
                    "chat_id" => $chat_id,
                    "reply_markup" => $keyboard
                ]);
                else $this->replyWithMessage([
                    "text" => "🗃 <b>$this->description</b>",
                    "parse_mode" => "html",
                    "reply_markup" => $keyboard
                ]);
            }
        } catch (TelegramSDKException | Exception $exception) {
            Log::error("AllFakesCommand {$exception->getMessage()}");
        }
    }
}
