<?php

namespace App\Http\Controllers\Admin\Telegram;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Telegram\BotController;
use App\Models\TelegramUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class CommandsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    public function index()
    {
        return view('admin.telegram.commands.index');
    }

    public function handler($command, Request $request)
    {
        if (method_exists(self::class, $command)) {
            return $this->$command($request);
        }
        return back()->with(["error" => "команда $command не существует!"]);
    }

    private function alert(Request $request)
    {
        $request->validate(['message' => ['required', 'string', 'max:5000']]);
        $msg = $request['message'];
        $telegramID = $request->user()->telegram_id ?? null;
        $users = TelegramUser::where('id', '<>', $telegramID)
            ->whereNotNull('role_id')
            ->get();
        $users->each(function (TelegramUser $user, $key) use ($msg) {
            dispatch(function () use ($user, $msg) {
                $user->sendMessage(["text" => $msg, "parse_mode" => "html"]);
            })->catch(function (Throwable $e) {
                Log::info($e->getMessage());
            });
        });
        return back()->with(["success" => !empty($users)
            ? "✅ Сообщения успешно отправлено"
            : "❕Пользователей не найдено"]);
    }
}
