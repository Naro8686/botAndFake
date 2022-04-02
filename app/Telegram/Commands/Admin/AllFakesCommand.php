<?php

namespace App\Telegram\Commands\Admin;

use App\Models\Fake;
use App\Telegram\Commands\FakesCommand;
use Illuminate\Contracts\Pagination\Paginator;
use Log;
use Telegram\Bot\Actions;
use Throwable;


class AllFakesCommand extends BaseAdminCommand
{
    protected $name = 'allFakes';
    protected $description = 'Объявления';
    public function handle()
    {
        try {
            $this->replyWithChatAction(['action' => Actions::TYPING]);
            $ids = $this->getUser()->fakes()->pluck('id');
            $fakes = Fake::whereNotIn('id', $ids->toArray())->simplePaginate(10);
            $this->pagination($fakes, "🗃 <b>$this->description</b>", 'allFakes');
        } catch (Throwable $exception) {
            Log::error("AllFakesCommand {$exception->getMessage()}");
        }
    }

    public static function renderBtn(Paginator $paginator): array
    {
        $buttons = FakesCommand::renderBtn($paginator);
        $buttons[] = [["text" => self::getConfig('btns.deleteAllFakes') ?? '', "callback_data" => "/deleteAllFakes"]];
        return $buttons;
    }
}
