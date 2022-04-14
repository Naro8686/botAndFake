<?php

namespace App\Telegram\Commands;

use App\Exceptions\TelegramUserPermissionException;
use App\Telegram\Dialogs\WebDialog;
use Log;
use Throwable;
use Telegram\Bot\Actions;
use Telegram\Bot\Keyboard\Keyboard;

class WebCommand extends BaseCommand
{
    protected $name = 'web';
    protected $aliases = ['web_index', 'web_create', 'web_store', 'web_edit', 'web_update'];
    protected $description = "Описание";
    protected $pattern = '{method}';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $user = $this->getUser();
        if (!$user->isMentor()) {
            throw new TelegramUserPermissionException($user, "❌️️ <b><i>Доступ запрещен!</i></b>", 401);
        }
        try {
            $method = $this->getArguments()['method'] ?? null;
            $update = $this->getUpdate();
            if (is_null($method) && !$update->isType('callback_query')) {
                $text = trim($update->getMessage()->text, '/');
                $key = array_search($text, $this->getConfig('btns')->all(), true) ?: $text;
                if (in_array($key, $this->getAliases())) {
                    $method = str_replace('web_', '', $key);
                }
            }
            $method = $method ?? 'index';
            $this->replyWithChatAction(['action' => Actions::TYPING]);
            if (method_exists(self::class, $method)) $this->$method();
            else $this->triggerCommand('not_found');
        } catch (Throwable $e) {
            $this->replyWithMessage([
                "text" => "<b>что то пошло не так</b>",
                "parse_mode" => "html"
            ]);
            Log::error("webCommand {$e->getMessage()}");
        }
        return false;
    }

    private function index()
    {
        $btns = $this->getConfig('btns');
        $buttons = [];
        $tgUser = $this->getUser();
        $webUser = $tgUser->user;
        if (is_null($webUser)) {
            $this->setDescription("У вас нет аккаунт.");
            $buttons[] = [["text" => $btns->get('web_create', '/web create')]];
        } else {
            $url = config('app.url');
            $this->setDescription(makeText([
                "👤 <b>Логин:</b> <code>{$webUser->email}</code>",
                "🔑 <b>Пароль:</b> <code>********</code>",
                "🌐 <b>URL:</b> <a href='$url'>{$url}</a>",
            ]));
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

    private function create()
    {
        $dialog = new WebDialog($this->getUpdate(), $this->getUser());
        $dialog->setMemory(json_encode(['method' => __FUNCTION__]));
        $this->dialogs()->add($dialog);
        return false;
    }

    private function edit()
    {
        $dialog = new WebDialog($this->getUpdate(), $this->getUser());
        $dialog->setMemory(json_encode(['method' => __FUNCTION__]));
        $this->dialogs()->add($dialog);
        return false;
    }
}
