<?php

namespace App\Telegram\Commands;

use App\Models\Fake;
use App\Models\Role;
use Illuminate\Contracts\Pagination\Paginator;
use Throwable;
use Log;
use Telegram\Bot\Actions;


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
