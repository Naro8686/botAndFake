<?php

namespace App\Telegram\Commands;

use App\Models\Fake;
use App\Models\Role;
use Telegram\Bot\Actions;
use Telegram\Bot\Keyboard\Keyboard;


/**
 * Class HelpCommand.
 */
class AllFakesCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'allFakes';

    /**
     * @var string Command Description
     */
    protected $description = 'Объявления';
    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $ids = $this->getUser()->fakes()->pluck('id');
        $fakes = Fake::whereNotIn('id', $ids->toArray())->get();
        $currency = $this->getConfig('currency');
        if ($fakes->isEmpty()) {
            $this->replyWithMessage([
                "text" => "📂 <b>Объявление не найдено</b>",
                "parse_mode" => "html",
            ]);
        } else {
            $buttons = [];
            foreach ($fakes as $fake) {
                $categoryName = ucfirst($fake->category->name);
                $buttons[] = [["text" => "$categoryName - $fake->price{$currency} - $fake->title", "callback_data" => "/getFake $fake->track_id"]];
            }
            $buttons[] = [["text" => $this->getConfig('btns.deleteAllFakes') ?? '', "callback_data" => "/deleteAllFakes all"]];
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