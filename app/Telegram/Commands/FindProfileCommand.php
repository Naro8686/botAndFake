<?php

namespace App\Telegram\Commands;

use App\Constants\Status;
use App\Models\Role;
use App\Models\TelegramUser;
use Log;
use Telegram\Bot\Actions;
use Telegram\Bot\Keyboard\Keyboard;
use Throwable;

/**
 * Class HelpCommand.
 */
class FindProfileCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'findProfile';

    /**
     * @var array Command Aliases
     */

    /**
     * @var string Command Description
     */
    protected $description = 'Найти пользователя';
    protected $pattern = '{telegram_id}';

    public function handle()
    {
        try {
            $telegram_id = $this->getArguments()['telegram_id'] ?? null;
            $user = TelegramUser::find($telegram_id);
            if (is_null($user)) return;
            $this->replyWithMessage([
                'text' => '🕓 <i><b>Загружаю информацию о профиле!</b></i>',
                "parse_mode" => "html"
            ]);
            $btns = $this->getConfig('btns');
            $info = $user->info();
            $this->replyWithChatAction(['action' => Actions::TYPING]);

            $keyboard = [];
            if ($this->getUser()->isAdmin()) {
                $text = makeText([
                    "🆔 <i>ID:</i> <code>{$info['id']}</code>",
                    "🗽 <i>Ник:</i> <a href='tg://user?id={$info['id']}'><b>{$info['name']}</b></a>",
                    "🗂 <i>Активных объявлений:</i> <b>{$info['fakeCount']}</b>",
                    "👨‍👦 <i>Пригласил:</i> <b>{$info['invited']}</b>",
                    "👨‍👦‍👦 <i>Приглашено воркеров:</i> <b>{$info['refCount']}</b>",
                    "⭐️ <i>Статус:</i> <b>{$info['status']}</b>",
                    "📆 <i>Вступил в команду:</i> <b>{$info['regDate']}</b>",
                ]);
                $keyboard[] = [["text" => $btns->get('delete') ?? '', "callback_data" => "/deleteUser $user->id"]];
                if ($user->banned()) {
                    $keyboard[] = [["text" => $btns->get('unlock') ?? '', "callback_data" => "/unlock $user->id"]];
                } else {
                    $keyboard[] = [["text" => $btns->get('lock') ?? '', "callback_data" => "/lock $user->id"]];
                }
                $roles = Role::get();
                $buttons = [];
                foreach ($roles as $role) {
                    $name = $role->id === $user->role_id ? "{$role->getRoleName()} *" : $role->getRoleName();
                    $buttons[] = ["text" => $name, "callback_data" => "/changeStatus $user->id $role->name"];
                }
            } else {
                $mentor = $this->getUser()->mentor;
                $status = "не назначен";
                $text = [];
                $text[] = "🆔 <i>ID:</i> <code>{$info['id']}</code>";
                $text[] = "🗽 <i>Ник:</i> {$info['nickname']}";

                if ($mentor) switch ($mentor->status) {
                    case Status::ACCEPT:
                        $status = "подтвержден";
                        break;
                    case Status::PENDING:
                        $status = "в ожидание";
                        break;
                    case Status::REJECTED:
                        $status = "отмена";
                        break;
                }
                $text[] = "🧙‍ <i>Статус наставника:</i> <b>{$status}</b>";
                $text[] = "📆 <i>Вступил в команду:</i> <b>{$info['regDate']}</b>";

                $text = makeText($text);
                $buttons[] = is_null($mentor)
                    ? ["text" => "Назначить наставника", "callback_data" => "/mentors set $telegram_id {$this->getUser()->id}"]
                    : ["text" => "Удалить наставника", "callback_data" => "/mentors delete $telegram_id {$this->getUser()->id}"];
            }
            $keyboard[] = $buttons;
            $this->replyWithMessage([
                "text" => $text,
                "parse_mode" => "html",
                "reply_markup" => Keyboard::make([
                    "inline_keyboard" => $keyboard,
                    "resize_keyboard" => true,
                ]),
            ]);
        } catch (Throwable $throwable) {
            Log::error("FindProfileCommand {$throwable->getMessage()}");
        }
    }
}
