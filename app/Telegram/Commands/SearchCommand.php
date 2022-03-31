<?php

namespace App\Telegram\Commands;

use App\Models\Fake;
use App\Models\TelegramUser;
use App\Models\Role;
use Cache;
use Illuminate\Contracts\Pagination\Paginator;
use Log;
use Telegram\Bot\Actions;
use Throwable;


/**
 * Class HelpCommand.
 */
class SearchCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'search';

    protected $pattern = '{table}{value}';

    protected $permissionName = Role::ADMIN;
    /**
     * @var array|mixed
     */
    private static $table;
    /**
     * @var array|mixed
     */
    private static $value;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        try {
            $seconds = 60;
            $table = $this->getArguments()['table'] ?? null;
            $value = $this->getArguments()['value'] ?? null;
            $user = $this->getUser();
            if (!(is_null($table) || is_null($value))) {
                Cache::put("search.table.$user->id", $table, $seconds);
                Cache::put("search.value.$user->id", $value, $seconds);
            }
            self::$table = $table ?? Cache::get("search.table.$user->id");
            self::$value = $value ?? Cache::get("search.value.$user->id");
            $table = self::$table;
            $value = self::$value;
            $this->replyWithChatAction(['action' => Actions::TYPING]);
            $items = collect();
            switch ($table) {
                case "fakes":
                    $items = Fake::where("track_id", "LIKE", "%{$value}}%")->simplePaginate(10);
                    break;
                case "users":
                    $items = TelegramUser::whereId($value)
                        ->orWhere(function ($query) use ($value) {
                            $val = str_replace('@', '', $value);
                            $query->where('username', 'LIKE', '%' . $val . '%')
                                ->orWhere('first_name', 'LIKE', '%' . $val . '%')
                                ->orWhere('last_name', 'LIKE', '%' . $val . '%');
                        })->whereDoesntHave('role', function ($query) {
                            $query->where('name', Role::ADMIN);
                        })->simplePaginate(10);
                    break;
            }
            if ($items->isNotEmpty()) $this->pagination($items, "🔍 <b>Вот что я нашел по запросу</b>");
            else $this->replyWithMessage([
                "text" => "По значению <b>$value</b> ничего не найдено!",
                "parse_mode" => "html",
            ]);
        } catch (Throwable $e) {
            Log::error("SearchCommand {$e->getMessage()}");
        }
    }

    public static function renderBtn(Paginator $paginator): array
    {
        $buttons = [];
        switch (self::$table) {
            case "fakes":
                $buttons = FakesCommand::renderBtn($paginator);
                break;
            case "users":
                $buttons = AllUsersCommand::renderBtn($paginator);
                break;
        }
        return $buttons;
    }
}
