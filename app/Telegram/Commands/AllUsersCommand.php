<?php

namespace App\Telegram\Commands;

use Log;
use App\Models\Role;
use App\Models\TelegramUser;
use Telegram\Bot\Keyboard\Keyboard;
use Illuminate\Contracts\Pagination\Paginator;
use App\Http\Controllers\Telegram\BotController;
use Telegram\Bot\Exceptions\TelegramSDKException;


/**
 * Class HelpCommand.
 */
class AllUsersCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'allUsers';

    /**
     * @var string Command Description
     */
    protected $description = 'Другие пользователи';
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
            $users = TelegramUser::whereHas('role', function ($query) {
                $query->where('name', '<>', Role::ADMIN);
            })
                ->where('id', '<>', $this->getUser()->id)
                ->simplePaginate(10);
            if ($users->isEmpty()) $this->replyWithMessage([
                "text" => "❕ <i>Пусто</i>",
                "parse_mode" => "html",
            ]);
            else {
                $buttons = self::renderBtn($users);
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
                    "text" => "👥 <b>$this->description</b>",
                    "parse_mode" => "html",
                    "reply_markup" => $keyboard
                ]);
            }
        } catch (TelegramSDKException $e) {
            Log::error("AllUsersCommand {$e->getMessage()}");
        }
    }

    public static function renderBtn(Paginator $users, $commandName = 'allUsers'): array
    {
        $buttons = [];

        if ($users->currentPage() !== 1) {
            $prev = $users->currentPage() - 1;
            $buttons[] = [["text" => BotController::getConfig('btns.previous') ?? '', "callback_data" => "/$commandName?page=$prev"]];
        }

        foreach ($users as $user) {
            $buttons[] = [["text" => "$user->id | {$user->getRoleName()}", "callback_data" => "/findProfile $user->id"]];
        }

        if ($users->hasMorePages()) {
            $next = $users->currentPage() + 1;
            $buttons[] = [["text" => BotController::getConfig('btns.next') ?? '', "callback_data" => "/$commandName?page=$next"]];
        }

        return $buttons;
    }
}
