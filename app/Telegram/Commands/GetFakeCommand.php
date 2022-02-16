<?php

namespace App\Telegram\Commands;

use App\Http\Controllers\Telegram\BotController;
use App\Models\Country;
use App\Models\Fake;
use Telegram\Bot\Actions;
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
        $user->deleteDialog();
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $fake = Fake::where('track_id', $track_id)->first();

        if (!is_null($fake) && ($user->isAdmin() || $fake->telegram_id === $user->id)) {
            list($text, $keyboard) = self::getResponse($fake);
            $this->replyWithMessage([
                "text" => $text,
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);
        } else $this->replyWithMessage([
            "text" => "📂 <b>Объявление не найдено</b>",
            "parse_mode" => "html",
        ]);
    }

    public static function getResponse(Fake $fake): array
    {
        $config = BotController::getConfig();
        $btns = $config->get('btns');
        $currency = $fake->country->currency ?? Country::currency(Country::POLAND);
        $categoryName = ucfirst($fake->category->name);
        $track_id = $fake->track_id;
        $flag = ($fake->country->flag ?? Country::flag(Country::POLAND));
        $text = makeText([
            "☄️ <i>Данные успешно получены</i>",
            "",
            "🆔 Номер объявления: <b><code>$fake->track_id</code></b>",
            "🏷 Название: <b><code>$fake->title</code></b>",
            "💵 Стоимость: <b><code>$fake->price</code> $currency</b>",
            "",
            "📆 Дата генерации: <b>{$fake->created_at->format('d.m.Y H:i')}</b>",
            "",
            "$flag $categoryName: <a href='{$fake->linkForPay()}'><b>Оплата</b></a>",
            "$flag $categoryName: <a href='{$fake->linkForGet()}'><b>Получение средств</b></a>",
        ]);
        $keyboard = Keyboard::make([
            "inline_keyboard" => [
                [["text" => "📎 Ссылка чата", "url" => $fake->adminChatLink()]],
                [["text" => $btns['sendEmail'] ?? '', "callback_data" => "/send email $track_id"]],
                [["text" => $btns['generateQrCode'] ?? '', "callback_data" => "/qr fake $track_id"]],
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
        return [$text, $keyboard];
    }
}