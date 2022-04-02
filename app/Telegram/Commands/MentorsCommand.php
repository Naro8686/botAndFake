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
    protected $aliases = ['mentors_all', 'mentors_get'];
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
                $text = trim($update->getMessage()->text,'/');
                $key = array_search($text, $this->getConfig('btns')->all(), true) ?: $text;
                if (in_array($key, $this->getAliases())) switch ($key) {
                    case 'mentors_get':
                        $method = 'get';
                        break;
                    case 'mentors_all':
                        $method = 'all';
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
        $keyboard = Keyboard::make([
            "keyboard" => [
                [
                    ["text" => $btns->get('mentors_all', 'mentors_all')],
                    ["text" => $btns->get('mentors_get', 'mentors_get')]
                ],
                [["text" => $btns->get('back', '/back')]],
            ],
            "resize_keyboard" => true,
            "one_time_keyboard" => false,
        ]);
        $this->replyWithMessage([
            "text" => $this->getDescription(),
            "parse_mode" => "html",
            "reply_markup" => $keyboard
        ]);
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
                        [["text" => $this->getConfig('btns.delete', 'delete'), "callback_data" => "/{$this->getName()} remove $account->id $user->id"]]
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

    private function remove($args)
    {
        $user = $this->getUser();
        $mentor = Mentor::find($args['mentor_id']);
        if ($user->mentors()->detach($mentor->id)) {
            $update = $this->getUpdate();
            $this->getTelegram()->editMessageText([
                "text" => "❌ <b>Наставник удалён</b>",
                "parse_mode" => "html",
                "message_id" => $update->getMessage()->messageId,
                "chat_id" => $update->getChat()->id,
            ]);
            $mentor->account->sendMessage([
                "text" => "❌ {$user->accountLinkVisibly()} <b>удалил Вас из наставников</b>",
                "parse_mode" => "html",
            ]);
        } else throw new Exception();
    }
}
