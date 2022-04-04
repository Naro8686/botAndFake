<?php

namespace App\Telegram\Commands\Admin;

use Telegram\Bot\Actions;
use Illuminate\Support\Facades\Artisan;

class CacheClearCommand extends BaseAdminCommand
{
    protected $name = 'cache_clear';
    protected $description = 'Сброс кэша';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        Artisan::call('cache:clear');
        $this->replyWithMessage([
            "text" => "✅ <b>Кэш сброшен</b>",
            "parse_mode" => "html",
        ]);
    }
}
