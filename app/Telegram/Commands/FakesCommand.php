<?php

namespace App\Telegram\Commands;

use App\Http\Controllers\Telegram\BotController;

use App\Models\Country;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Log;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;
use Throwable;


/**
 * Class HelpCommand.
 */
class FakesCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'fakes';

    /**
     * @var string Command Description
     */
    protected $description = 'Мои объявления';

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

            $fakes = $this->getUser()->fakes()->orderByDesc('id')->simplePaginate(10);
            if ($fakes->isEmpty()) $this->replyWithMessage([
                "text" => "📂 <b>Объявление не найдено!</b>",
                "parse_mode" => "html",
            ]);
            else {
                $buttons = self::renderBtn($fakes);
                $inline_keyboard = Keyboard::make([
                    "inline_keyboard" => $buttons,
                    "resize_keyboard" => true,
                ]);
                if ($this->hasPagination) $telegram->editMessageReplyMarkup([
                    "parse_mode" => "html",
                    "message_id" => $message->messageId,
                    "chat_id" => $chat_id,
                    "reply_markup" => $inline_keyboard
                ]);
                else {
                    $this->replyWithMessage([
                        "text" => "🗃 <b>$this->description</b>",
                        "parse_mode" => "html",
                        "reply_markup" => $inline_keyboard
                    ]);
                    $keyboard = Keyboard::make([
                        "keyboard" => [
                            [["text" => $this->getConfig('btns.deleteFakes', 'deleteFakes')]],
                            [["text" => $this->getConfig('btns.start', 'start')]]
                        ],
                        "resize_keyboard" => true,
                        "one_time_keyboard" => false,
                    ]);
                    $this->replyWithMessage([
                        "text" => "👇🏻",
                        "parse_mode" => "html",
                        "reply_markup" => $keyboard,
                    ]);
                }
            }
        } catch (TelegramSDKException|Throwable $e) {
            Log::error("FakesCommand {$e->getMessage()}");
        }
    }

    public static function renderBtn(Paginator $fakes, $commandName = 'fakes'): array
    {
        $buttons = [];
        if ($fakes->currentPage() !== 1) {
            $prev = $fakes->currentPage() - 1;
            $buttons[] = [["text" => BotController::getConfig('btns.previous') ?? '', "callback_data" => "/$commandName?page=$prev"]];
        }

        foreach ($fakes as $fake) {
            $currency = $fake->country->currency ?? setting('currency');
            $categoryName = ucfirst($fake->category->name ?? 'Undefined');
            $flag = ($fake->country->flag ?? Country::flag(Country::POLAND));
            $title = Str::limit($fake->title, 50);
            $price = Str::limit($fake->price, 10);
            $buttons[] = [["text" => "$flag $categoryName - $price $currency - $title", "callback_data" => "/getFake $fake->track_id"]];
        }
        if ($fakes->hasMorePages()) {
            $next = $fakes->currentPage() + 1;
            $buttons[] = [["text" => BotController::getConfig('btns.next') ?? '', "callback_data" => "/$commandName?page=$next"]];
        }
        return $buttons;
    }


    public function setModel(): Collection
    {
        return $this->getUser()->fakes()->limit(2)->get();
    }
}
