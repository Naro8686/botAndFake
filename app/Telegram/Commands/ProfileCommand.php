<?php

namespace App\Telegram\Commands;

use Log;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;
use Throwable;

/**
 * Class HelpCommand.
 */
class ProfileCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'profile';

    /**
     * @var array Command Aliases
     */
    protected $aliases = ['profilesettings'];

    /**
     * @var string Command Description
     */
    protected $description = 'Профиль';

    public function handle()
    {
        try {
            $this->replyWithMessage([
                'text' => '🕓 <i><b>Загружаю информацию о вашем профиле!</b></i>',
                "parse_mode" => "html"
            ]);
            $btns = $this->getConfig('btns');
            $user = $this->getUser();
            $info = $user->info();
            $text = makeText([
                "🗽 <i>Мой ник:</i> <a href='tg://user?id={$info['id']}'><b>{$info['name']}</b></a>",
                "🆔 <i>ID:</i> <b>{$info['id']}</b>",
//                "⚖️ <i>Ставка:</i> <b>70% / 65%</b>",
                "🗂 <i>Активных объявлений:</i> <b>{$info['fakeCount']}</b>",
                "👨‍👦 <i>Меня пригласил:</i> <b>{$info['invited']}</b>",
                "👨‍👦‍👦 <i>Приглашено воркеров:</i> <b>{$info['refCount']}</b>",
                "⭐️ <i>Статус:</i> <b>{$info['status']}</b>",
                "📆 <i>Вступил в команду:</i> <b>{$info['regDate']}</b>",
            ]);
            $this->replyWithChatAction(['action' => Actions::TYPING]);
            $keyboard = Keyboard::make([
                "keyboard" => [
                    [
                        ["text" => $btns->get('rules', '/rules')],
                        ["text" => $btns->get('settings', '/settings')]
                    ],
                    [
                        ["text" => $btns->get('generateToken', '/generateToken')],
                    ],
                    [
                        ["text" => $btns->get('mentors', '/mentors get')],
                    ],
                    [
                        ["text" => $btns->get('back', '/back')],
                    ],
                ],
                "resize_keyboard" => true,
                "one_time_keyboard" => false,
            ]);
            $this->replyWithMessage([
                "text" => $text,
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);
        } catch (Throwable $throwable) {
            Log::error("ProfileCommand {$throwable->getMessage()}");
        }
    }
}
