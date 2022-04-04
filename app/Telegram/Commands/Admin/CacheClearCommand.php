<?php

namespace App\Telegram\Commands\Admin;

use Telegram\Bot\Actions;
use Illuminate\Support\Facades\Artisan;

class CacheClearCommand extends BaseAdminCommand
{
    protected $name = 'clear';
    protected $description = 'Сброс кэша';
    protected $pattern = '{type}';
    protected $aliases = ['cache_clear', 'config_clear', 'conf_clear'];

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        try {
            $type = $this->getArguments()['type'] ?? null;
            $update = $this->getUpdate();
            if (is_null($type)) {
                $text = trim($update->getMessage()->text, '/');
                if (in_array($text, $this->getAliases())) switch ($text) {
                    case 'cache_clear':
                        $type = 'cache';
                        break;
                    case 'config_clear':
                    case 'conf_clear':
                        $type = 'config';
                        break;
                }
            }
            $type = $type ?? 'cache';
            if (in_array($type, ['config', 'cache'])) {
                Artisan::call("$type:clear");
                if ($type !== 'cache') {
                    Artisan::call("$type:cache");
                }
                return $this->replyWithMessage([
                    "text" => "✅ <b>Кэш сброшен</b>",
                    "parse_mode" => "html",
                ]);
            }
        } catch (\Throwable $exception) {
            return $this->replyWithMessage([
                "text" => "❕ <b>Ошибка</b>",
                "parse_mode" => "html",
            ]);
        }

        $this->triggerCommand('not_found');
        return false;
    }
}
