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
            $fakes = $this->getUser()->fakes()->orderByDesc('id')->simplePaginate(10);
            $this->pagination($fakes, "🗃 <b>$this->description</b>", "fakes");
            if (!$this->hasPagination) $this->replyWithMessage([
                "text" => "👇🏻",
                "parse_mode" => "html",
                "reply_markup" => Keyboard::make([
                    "keyboard" => [
                        [["text" => $this->getConfig('btns.deleteFakes', 'deleteFakes')]],
                        [["text" => $this->getConfig('btns.start', 'start')]]
                    ],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]),
            ]);
        } catch (Throwable $e) {
            Log::error("FakesCommand {$e->getMessage()}");
        }
    }

    public static function renderBtn(Paginator $paginator): array
    {
        $buttons = [];
        foreach ($paginator as $fake) {
            $currency = $fake->country->currency ?? setting('currency');
            $categoryName = ucfirst($fake->category->name ?? 'Undefined');
            $flag = ($fake->country->flag ?? Country::flag(Country::POLAND));
            $title = Str::limit($fake->title, 50);
            $price = Str::limit($fake->price, 10);
            $buttons[] = [["text" => "$flag $categoryName - $price $currency - $title", "callback_data" => "/getFake $fake->track_id"]];
        }
        return $buttons;
    }


    public function setModel(): Collection
    {
        return $this->getUser()->fakes()->limit(2)->get();
    }
}
