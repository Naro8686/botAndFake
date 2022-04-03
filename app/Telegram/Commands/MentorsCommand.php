<?php

namespace App\Telegram\Commands;

use App\Telegram\Dialogs\MentorsDialog;
use Exception;
use Log;
use Telegram\Bot\Actions;
use Throwable;
use App\Models\Mentor;
use App\Constants\Status;
use App\Models\TelegramUser;
use Telegram\Bot\Keyboard\Keyboard;

class MentorsCommand extends BaseCommand
{
    protected $name = 'mentors';
    protected $aliases = ['mentors_index', 'mentors_all', 'mentors_get', 'mentors_children'];
    protected $description = "Здесь будет описание системы наставников.";
    protected $pattern = '{method}{mentor_id?}{tg_id?}';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        try {
            $method = $this->getArguments()['method'] ?? null;
            $update = $this->getUpdate();
            if (is_null($method) && !$update->isType('callback_query')) {
                $text = trim($update->getMessage()->text, '/');
                $key = array_search($text, $this->getConfig('btns')->all(), true) ?: $text;
                if (in_array($key, $this->getAliases())) switch ($key) {
                    case 'mentors_index':
                        $method = 'index';
                        break;
                    case 'mentors_get':
                        $method = 'get';
                        break;
                    case 'mentors_all':
                        $method = 'all';
                        break;
                    case 'mentors_children':
                        $method = 'children';
                        break;
                }
            }
            $method = $method ?? 'index';
            $args = [
                'mentor_id' => ($this->getArguments()['mentor_id'] ?? null),
                'tg_id' => ($this->getArguments()['tg_id'] ?? optional($this->getUser())->id),
                'method' => $method
            ];
            $this->replyWithChatAction(['action' => Actions::TYPING]);
            if (method_exists(self::class, $method)) $this->$method($args);
            else $this->triggerCommand('not_found');
        } catch (Throwable $e) {
            $this->replyWithMessage([
                "text" => "<b>что то пошло не так</b>",
                "parse_mode" => "html"
            ]);
            Log::error("MentorsCommand {$e->getMessage()}");
        }
        return false;
    }

    private function index()
    {
        $btns = $this->getConfig('btns');
        $buttons = [];
        $buttons[] = [
            ["text" => $btns->get('mentors_all', '/mentors_all')],
            ["text" => $btns->get('mentors_get', '/mentors_get')]
        ];
        if ($this->getUser()->isMentor()) {
            $buttons[] = [["text" => $btns->get('mentors_children', '/mentors_children')]];
        }
        $buttons[] = [["text" => $btns->get('back', '/back')]];
        $keyboard = Keyboard::make([
            "keyboard" => $buttons,
            "resize_keyboard" => true,
            "one_time_keyboard" => false,
        ]);
        $this->replyWithMessage([
            "text" => $this->getDescription(),
            "parse_mode" => "html",
            "reply_markup" => $keyboard
        ]);
    }

    private function children()
    {
        $user = $this->getUser();
        $mentor = Mentor::find($user->id);
        if (is_null($mentor)) throw new Exception();

        $children = $mentor->users();
        if (!$children->count()) return $this->replyWithMessage([
            "text" => "<b>Нет учеников.</b>",
            "parse_mode" => "html",
        ]);
        foreach ($children->lazy(100) as $key => $user) {
            $iter = $key + 1;
            $status = $user->pivot->status === Status::ACCEPT ? 'Одобрен' : 'Не одобрен';
            $this->replyWithMessage([
                "text" => makeText([
                    "<b>$iter</b>.",
                    "",
                    "👷‍ <b>{$user->accountLinkVisibly()}</b>",
                    "💡 <b>{$user->pivot->experience}</b>",
                    "🔖 <b>$status</b>",
                ]),
                "parse_mode" => "html",
                "reply_markup" => Keyboard::make([
                    "inline_keyboard" => [
                        [["text" => $this->getConfig('btns.delete', 'delete'), "callback_data" => "/{$this->getName()} removeChild $mentor->id $user->id"]]
                    ]
                ]),
            ]);
        }
    }

    private function all()
    {
        $user = $this->getUser();
        if (!Mentor::count()) return $this->replyWithMessage([
            "text" => "<b>Нет активных наставников.</b>",
            "parse_mode" => "html",
        ]);
        foreach (Mentor::lazy(100) as $key => $mentor) {
            $iter = $key + 1;
            $account = $mentor->account;
            $this->replyWithMessage([
                "text" => makeText([
                    "<b>$iter</b>.",
                    "",
                    "👷‍ <b>{$account->accountLinkVisibly()}</b>",
                    "💡 <b>$mentor->description</b>",
                ]),
                "parse_mode" => "html",
                "reply_markup" => Keyboard::make([
                    "inline_keyboard" => [
                        [["text" => $this->getConfig('btns.request', 'request'), "callback_data" => "/{$this->getName()} set $account->id $user->id"]]
                    ]
                ]),
            ]);
        }
    }

    private function get()
    {
        $user = $this->getUser();
        $mentors = $user->mentors()->where('status', Status::ACCEPT)->get();
        if (!count($mentors)) return $this->replyWithMessage([
            "text" => "<b>Нет активных наставников.</b>",
            "parse_mode" => "html",
        ]);
        foreach ($mentors as $mentor) {
            $account = $mentor->account;
            $this->replyWithMessage([
                "text" => makeText([
                    "👷‍ <b>{$account->accountLinkVisibly()}</b>",
                    "💡 <b>$mentor->description</b>",
                ]),
                "parse_mode" => "html",
                "reply_markup" => Keyboard::make([
                    "inline_keyboard" => [
                        [["text" => $this->getConfig('btns.delete', 'delete'), "callback_data" => "/{$this->getName()} removeMentor $account->id $user->id"]]
                    ]
                ]),
            ]);
        }
    }

    private function set($args)
    {
        $errors = [];
        $user = TelegramUser::find($args['tg_id']);
        $mentor = Mentor::find($args['mentor_id']);
        if ($user->id === $mentor->id) $errors[] = "Вы не можете назначить наставника самого себя";
        if (is_null($user)) $errors[] = "Пользователь не найден";
        if (is_null($mentor)) $errors[] = "Наставник не найден";
        if ($user->mentor()) $errors[] = "Наставник уже назначен";
        if (!empty($errors)) return $this->replyWithMessage([
            "text" => makeText($errors),
            "parse_mode" => "html",
        ]);
        $dialog = new MentorsDialog($this->getUpdate(), $this->getUser());
        $dialog->setMemory(json_encode($args));
        $this->dialogs()->add($dialog);
        return false;
    }

    private function approve($args)
    {
        $mentor = Mentor::find($this->getUser()->id);
        $user = TelegramUser::find($args['tg_id']);
        if (is_null($mentor)) $text = "<b>Вы не назначены как наставник</b>";
        elseif ($user->mentor()) {
            $text = "<b>У пользователя уже есть наставник</b>";
            $mentor->users()->detach($user->id);
        } else {
            $updated = $mentor->users()->updateExistingPivot($user->id, [
                'status' => Status::ACCEPT
            ]);
            if ($updated) {
                $text = "<b>запрос принят</b>";
                $userName = optional($mentor->account)->accountLinkVisibly();
                $user->sendMessage([
                    "text" => "<b>Вашем наставником стал</b> $userName",
                    "parse_mode" => "html",
                ]);
            } else throw new Exception();
        }
        $update = $this->getUpdate();
        $this->getTelegram()->editMessageText([
            "text" => "✅ $text",
            "parse_mode" => "html",
            "message_id" => $update->getMessage()->messageId,
            "chat_id" => $update->getChat()->id,
        ]);
    }

    private function reject($args)
    {
        $mentor = Mentor::find($this->getUser()->id);
        $user = TelegramUser::find($args['tg_id']);
        $deleted = $mentor->users()->detach($user->id);
        if ($deleted) {
            $update = $this->getUpdate();
            $this->getTelegram()->editMessageText([
                "text" => "❌ <b>запрос отклонен</b>",
                "parse_mode" => "html",
                "message_id" => $update->getMessage()->messageId,
                "chat_id" => $update->getChat()->id,
            ]);
            $userName = optional($mentor->account)->accountLinkVisibly();
            $user->sendMessage([
                "text" => "$userName <b>отказался стать Вашем наставником</b>",
                "parse_mode" => "html",
            ]);
        } else throw new Exception();
    }

    private function removeMentor($args)
    {
        $user = $this->getUser();
        $mentor = Mentor::find($args['mentor_id']);
        $update = $this->getUpdate();
        $mentor->account->sendMessage([
            'text' => makeText([
                "🧙‍ <b>{$user->accountLinkVisibly()} просит удалить его из списка учеников.</b>",
            ]),
            "parse_mode" => "html",
            "reply_markup" => Keyboard::make(["inline_keyboard" => [[
                ["text" => $this->getConfig('btns.approve'), 'callback_data' => "/mentors removeChild $mentor->id $user->id"],
                ["text" => $this->getConfig('btns.reject'), 'callback_data' => "/mentors cancelRemoveChild $mentor->id $user->id"],
            ]], "resize_keyboard" => true, "one_time_keyboard" => false])
        ]);
        $this->getTelegram()->editMessageText([
            "text" => "✅ <b>Заявка на удаление отправлен</b>",
            "parse_mode" => "html",
            "message_id" => $update->getMessage()->messageId,
            "chat_id" => $update->getChat()->id,
        ]);
    }

    private function removeChild($args)
    {
        $mentor_id = $this->getUser()->id;
        if ($mentor_id != $args['mentor_id']) throw new Exception();
        $mentor = Mentor::find($mentor_id);
        $user = TelegramUser::find($args['tg_id']);

        if ($mentor->users()->detach($user->id)) {
            $update = $this->getUpdate();
            $this->getTelegram()->editMessageText([
                "text" => "❌ <b>Ученик удалён</b>",
                "parse_mode" => "html",
                "message_id" => $update->getMessage()->messageId,
                "chat_id" => $update->getChat()->id,
            ]);
            $user->sendMessage([
                "text" => "❌ {$mentor->account->accountLinkVisibly()} <b>удалил Вас из списка учеников</b>",
                "parse_mode" => "html",
            ]);
        } else throw new Exception();
    }

    private function cancelRemoveChild($args){
        $mentor_id = $this->getUser()->id;
        if ($mentor_id != $args['mentor_id']) throw new Exception();
        $mentor = Mentor::find($mentor_id);
        $user = TelegramUser::find($args['tg_id']);
        $update = $this->getUpdate();
        $this->getTelegram()->editMessageText([
            "text" => "❌ <b>Запрос на удаление из списка учеников для {$user->accountLinkVisibly()} отменен</b>",
            "parse_mode" => "html",
            "message_id" => $update->getMessage()->messageId,
            "chat_id" => $update->getChat()->id,
        ]);
        $user->sendMessage([
            "text" => "❌ {$mentor->account->accountLinkVisibly()} <b>Наставник отменил вашу заявку на удаление</b>",
            "parse_mode" => "html",
        ]);
    }
}
