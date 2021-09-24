<?php

namespace App\Telegram\Commands;

use App\Models\Fake;
use Telegram\Bot\Actions;
use Telegram\Bot\Keyboard\Keyboard;


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
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $fakes = $this->getUser()->fakes()->get();
        $currency = setting('currency');
        if ($fakes->isEmpty()) {
            $this->replyWithMessage([
                "text" => "📂 <b>Объявление не найдено!</b>",
                "parse_mode" => "html",
            ]);
        } else {
            $buttons = [];
            foreach ($fakes as $fake) {
                $categoryName = ucfirst($fake->category->name);
                $buttons[] = [["text" => "$categoryName - $fake->price{$currency} - $fake->title", "callback_data" => "/getFake $fake->track_id"]];
            }
            $buttons[] = [["text" => $this->getConfig('btns.deleteAllFakes') ?? '', "callback_data" => "/deleteAllFakes"]];
            $keyboard = Keyboard::make([
                "inline_keyboard" => $buttons,
                "resize_keyboard" => true,
            ]);
            $this->replyWithMessage([
                "text" => "🗃 <b>$this->description</b>",
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);
        }
    }
}