<?php

namespace App\Telegram\Commands;

use Log;
use Exception;
use Throwable;
use App\Models\Role;
use App\Models\Mentor;
use App\Constants\Status;
use App\Models\TelegramUser;
use Telegram\Bot\Keyboard\Keyboard;
use Illuminate\Contracts\Pagination\Paginator;
use Telegram\Bot\Exceptions\TelegramSDKException;

class MentorsCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'mentors';

    /**
     * @var string Command Description
     */
    protected $description = 'Наставники';

    protected $pattern = '{method}{mentor_id}{tg_id}';
    private $tg_id;
    private $mentor_id;
    /**
     * @var bool
     */
    private $hasMentor;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        try {
            return $this->replyWithMessage([
                "text" => "В разработке",
                "parse_mode" => "html",
            ]);
            $method = $this->getArguments()['method'] ?? 'get';
            $this->tg_id = $this->getArguments()['tg_id'] ?? optional($this->getUser())->id;
            $this->mentor_id = $this->getArguments()['mentor_id'] ?? null;
            $this->hasMentor = !is_null(optional($this->getUser())->mentor);
            if (method_exists(self::class, $method)) $this->$method();
            else throw new Exception('Method not supported');
        } catch (Throwable $e) {
            Log::error("MentorsCommand {$e->getMessage()}");
        }
    }

    private function get()
    {
        if (!$this->hasMentor) $mentors = TelegramUser::whereHas('role', function ($query) {
            $query->where('name', '=', Role::WORKER);
        })->where('id', '<>', $this->getUser()->id)->simplePaginate(10);
        else $mentors = $this->getUser()->mentor->tgUser()->simplePaginate();
        $this->pagination($mentors, "👥 <b>$this->description</b>");
    }

    /**
     * @return mixed|void
     * @throws TelegramSDKException
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    private function set()
    {
        if ($mentor = Mentor::find($this->mentor_id)) return $this->replyWithMessage([
            "text" => "Наставник уже назначен",
            "parse_mode" => "html",
        ]);
        $user = TelegramUser::find($this->tg_id);
        if (is_null($user)) throw new Exception('user not found');
        if ($user->mentor()->create(['id' => $this->mentor_id])) {
            $btns = $this->getConfig('btns');
            $message = $this->telegram->sendMessage([
                'chat_id' => $this->mentor_id,
                'text' => makeText([
                    "🧙‍ <b>Предложение об наставничество</b>",
                    "",
                    "👤 От: {$user->accountLinkVisibly(true)}",
                ]),
                "parse_mode" => "html",
                "reply_markup" => Keyboard::make([
                    "inline_keyboard" => [[
                        ["text" => $btns->get('approve') ?? '', 'callback_data' => "/mentors approve $this->mentor_id $this->tg_id"],
                        ["text" => $btns->get('reject') ?? '', 'callback_data' => "/mentors reject $this->mentor_id $this->tg_id"],
                    ]],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ])
            ]);
            $update = $this->getUpdate();
            $this->getTelegram()->editMessageText([
                "text" => "✅ <b>Запрос отправлен</b>",
                "parse_mode" => "html",
                "message_id" => $update->getMessage()->messageId,
                "chat_id" => $update->getChat()->id,
            ]);
        }
    }

    /**
     * @throws TelegramSDKException
     */
    private function approve()
    {
        $mentor = Mentor::find($this->getUser()->id);
        if ($mentor) $text = $mentor->update(['status' => Status::ACCEPT])
            ? "<b>запрос принят</b>"
            : "<b>что то пошло не так</b>";
        else $text = "<b>Вы не назначены как наставник</b>";
        $update = $this->getUpdate();
        $this->getTelegram()->editMessageText([
            "text" => "✅ $text",
            "parse_mode" => "html",
            "message_id" => $update->getMessage()->messageId,
            "chat_id" => $update->getChat()->id,
        ]);
        if ($mentor) {
            $userName = optional($mentor->tgUser)->accountLinkVisibly();
            $mentor->tgUserChild->sendMessage([
                "text" => "$userName <b>стал Вашем наставником</b>",
                "parse_mode" => "html",
            ]);
        }
    }

    /**
     * @throws TelegramSDKException
     */
    private function reject()
    {
        $mentor = Mentor::find($this->getUser()->id);
        if ($mentor) $text = $mentor->delete()
            ? "<b>запрос отклонен</b>"
            : "<b>что то пошло не так</b>";
        else $text = "<b>Вы не назначены как наставник</b>";
        $update = $this->getUpdate();
        $this->getTelegram()->editMessageText([
            "text" => "❌ $text",
            "parse_mode" => "html",
            "message_id" => $update->getMessage()->messageId,
            "chat_id" => $update->getChat()->id,
        ]);
        if ($mentor) {
            $userName = optional($mentor->tgUser)->accountLinkVisibly();
            $mentor->tgUserChild->sendMessage([
                "text" => "$userName <b>отказался стать наставником</b>",
                "parse_mode" => "html",
            ]);
        }
    }

    /**
     * @throws TelegramSDKException
     */
    private function delete()
    {
        $deleted = true;
        $mentor = Mentor::find($this->mentor_id);
        if ($mentor) $deleted = $mentor->delete();
        $update = $this->getUpdate();
        $this->getTelegram()->editMessageText([
            "text" => $deleted ? "✅ <b>Наставник удалён</b>" : "<b>что то пошло не так</b>",
            "parse_mode" => "html",
            "message_id" => $update->getMessage()->messageId,
            "chat_id" => $update->getChat()->id,
        ]);
        if ($mentor) {
            $userName = optional($mentor->tgUserChild)->accountLinkVisibly();
            $mentor->tgUser->sendMessage([
                "text" => "$userName <b>Вас удалил из наставников</b>",
                "parse_mode" => "html",
            ]);
        }
    }

    public static function renderBtn(Paginator $paginator): array
    {
        $buttons = [];
        foreach ($paginator as $user) {
            $buttons[] = [["text" => "{$user->getName()} [$user->id]", "callback_data" => "/findProfile $user->id"]];
        }
        return $buttons;
    }

}
