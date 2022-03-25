<?php

namespace App\Http\Controllers\Fake;

use App\Models\Country;
use Cache;
use Illuminate\Support\Facades\DB;
use App\Models\Fake;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Telegram\Bot\Keyboard\Keyboard;
use Throwable;


class ChatController extends Controller
{
    protected $track_id = null;
    public const ADMIN = 1;
    public const USER = 0;
    /**
     * @var mixed
     */
    public $uuid;

    public function __construct(Request $request)
    {
        try {
            if (!Schema::hasTable('chat')) {
                Schema::create('chat', function (Blueprint $table) {
                    $table->id();
                    $table->string('track');
                    $table->unsignedTinyInteger('role')->default(0);
                    $table->text('message');
                    $table->boolean('viewed')->default(false);
                    $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
                });
            }
            $this->middleware(function (Request $request, $next) {
                $this->track_id = $request->get('id', $request->session()->get('track_id'));
                if ($this->uuid = $request->session()->get('uuid')) Cache::remember("$this->uuid.is_online", 60,
                    function () {
                        return now()->toDateTimeString();
                    });
                return $next($request);
            });
        } catch (Throwable $throwable) {
        }
    }

    public function index(Request $request)
    {
        $track_id = $this->track_id;
        $is_admin = isset($request['role']) && (int)$request['role'] === self::ADMIN;
        if (isset($request['prop']) && isset($request['role']) && $request['prop'] === 'check_new_message') {
            return DB::table('chat')
                ->where('track', $track_id)
                ->where('viewed', 0)
                ->where('role', '<>', $is_admin)
                ->exists();
        }
        $fake = Fake::whereTrackId($track_id)->first();
        $locale = $fake->country->locale ?? Country::locale(Country::POLAND);
        $messages = DB::table('chat')->where('track', $track_id)->get();
        return view("fakes.$locale.includes.chat.ajax_chat", compact('messages', 'is_admin'))->render();
    }

    public function sendMsg(Request $request)
    {
        $fake = Fake::whereTrackId($this->track_id)->first();
        $status = 'error';
        if (!is_null($fake) && isset($request['msg']) && trim($request['msg']) !== '' && isset($request['role']) && in_array((int)$request['role'], [self::ADMIN, self::USER])) {
            $status = DB::table('chat')->insert([
                'role' => (int)$request['role'],
                'message' => $request['msg'],
                'track' => $fake->track_id
            ]) ? 'success' : 'error';
            $keyboard = Keyboard::make([
                "inline_keyboard" => [
                    [["text" => 'Ответить', "callback_data" => "/chat_answer $fake->track_id"]],
                ],
                "resize_keyboard" => true,
            ]);
            if ((int)$request['role'] === self::USER && $status === 'success') {
                foreach ($fake->allTakeUsers()->all() as $worker) $worker->sendMessage([
                    "text" => makeText([
                        "🆕Новое сообщение в чате: <code>{$request['msg']}</code>",
                        "🔒Ответ сообщение по этой ссылке: <a href='{$fake->adminChatLink()}'>ссылка</a>",
                        "🔗ID Объявления: <code>$fake->track_id</code>",
                        "⛏Воркер: <b>{$fake->telegramUser->accountLinkVisibly(true)}</b>"
                    ]),
                    "parse_mode" => "html",
                    "reply_markup" => $keyboard
                ]);
            }
        }

        return $status;
    }

    public function view(Request $request)
    {
        $role = (int)($request->has('role') && (int)$request['role'] === self::ADMIN);
        if ($request->has('id') && $request['id'] == $this->track_id) {
            DB::table('chat')
                ->where('track', $this->track_id)
                ->where('role', '<>', $role)
                ->where('viewed', 0)
                ->update(['viewed' => 1]);
        }
    }


    public function deleteMsg(Request $request): bool
    {
        $deleted = false;
        if (!is_null($this->track_id) && isset($request['msg_id']) && $request->get('page_from') === 'admin') {
            $deleted = DB::table('chat')
                ->where('id', $request['msg_id'])
                ->where('track', $this->track_id)
                ->delete();
        }
        return (bool)$deleted;
    }
}
