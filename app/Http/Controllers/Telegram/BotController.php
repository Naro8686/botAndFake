<?php

namespace App\Http\Controllers\Telegram;

use Exception;
use Log;
use Telegram\Bot\Api;
use Illuminate\Http\Request;
use App\Models\TelegramUser;
use App\Telegram\Dialogs\Dialogs;
use Illuminate\Http\JsonResponse;
use Illuminate\Config\Repository;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Telegram\Bot\Exceptions\TelegramSDKException;
use App\Exceptions\TelegramUserPermissionException;
use App\Telegram\Commands\BackCommand;
use App\Telegram\Commands\BaseCommand;
use App\Telegram\Commands\HelpCommand;
use App\Telegram\Commands\RequestCommand;
use App\Telegram\Commands\StartCommand;
use Illuminate\Support\Collection;
use Throwable;


class BotController extends Controller
{

    /**
     * @param TelegramUser|null $user
     * @param array $array
     * @return Collection
     */
    public function botCommandsFiltrated(?TelegramUser $user, array $array = []): Collection
    {
        $diff = [];
        if (is_null($user)) return collect($diff);
        $commands = self::getConfig('commands');

        if (!$user->banned() && $user->isActive()) $diff = [
            RequestCommand::class,
        ];
        elseif ($user->banned()) $diff = $commands->diff([
            StartCommand::class,
            HelpCommand::class,
            BackCommand::class,
        ])->toArray();
        elseif (!$user->isActive()) $diff = $commands->diff([
            RequestCommand::class,
            StartCommand::class,
            HelpCommand::class,
            BackCommand::class,
        ])->toArray();
        $commands = $commands->diff((array)$diff)->values();
        foreach ($array as $class) $commands->push($class);
        return $commands;
    }

    /**
     * @param null $field
     * @return Repository|Application|Collection|mixed
     */
    public static function getConfig($field = null)
    {
        $botName = env('TELEGRAM_BOT_NAME');
        $data = is_null($field) ? config("telegram.bots.$botName") : config("telegram.bots.$botName.$field");
        return is_array($data) ? collect($data) : $data;
    }

    /**
     * @param string $group
     * @param string|null $field
     * @return Repository|Application|Collection|mixed
     */
    public static function group(string $group, string $field = null)
    {
        $data = self::getConfig(is_null($field) ? "groups.$group" : "groups.$group.$field");
        return is_array($data) ? collect($data) : $data;
    }

    /**
     * @param null $field
     * @return Repository|Application|Collection|mixed
     */
    public static function groupAdmin($field = null)
    {
        return self::group('admin', $field);
    }

    /**
     * @param null $field
     * @return Repository|Application|Collection|mixed
     */
    public static function groupAlert($field = null)
    {
        return self::group('alert', $field);
    }

    /**
     * @return Api|null
     */
    public static function getTelegram(): ?Api
    {
        try {
            $telegram = new Api(self::getConfig('token'), config("telegram.async_requests"));
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
        return $telegram ?? null;
    }

    /**
     * @param string|null $key
     * @return JsonResponse
     */
    public function setWebhook(string $key = null): JsonResponse
    {
        $success = false;
        $env_key = env('TELEGRAM_WEBHOOK_KEY');
        try {
            if (is_null($key) || $key !== $env_key) throw new Exception(is_null($key) ? "Enter the key" : "Key does not match");
            $webhook_url = self::getConfig('webhook_url');
            $telegram = self::getTelegram();
            $telegram->removeWebhook();
            $success = $telegram->setWebhook(['url' => url($webhook_url, [], true)]);
        } catch (TelegramSDKException | Exception $e) {
            $msg = $e->getMessage();
        }
        return response()->json(['success' => $success, 'msg' => $msg ?? 'Ok']);
    }

    /**
     * @param Request $request
     * @param $key
     * @return JsonResponse
     */
    public function webhook($key, Request $request): JsonResponse
    {
        if (env("TELEGRAM_WEBHOOK_KEY") !== $key) return response()->json(['msg' => 'Key does not match'], 401);
        try {
            if ($request->has('callback_query')) {
                $callback_query = $request->input('callback_query');
                $message = $callback_query['message'];
                $from = $callback_query['from'] ?? [];
                $text = $callback_query['data'] ?? '';
            } else {
                $message = $request->input('message');
                $from = $message['from'] ?? [];
                $text = $message['text'] ?? '';
            }
            $from = collect($from);
            $member = $message['new_chat_member'] ?? null;
            $chatId = $message['chat']['id'] ?? null;
            $telegramUserId = $from->get('id');

            if (!empty($telegramUserId)) {
                $telegram = self::getTelegram();
                $config = self::getConfig();
                $telegramUser = TelegramUser::getUser($telegramUserId, $from->only(['id', 'first_name', 'last_name', 'is_bot', 'username', 'language_code'])->toArray());
                switch ($chatId) {
                    case $telegramUserId:
                        if (!is_null($telegramUser) && self::groupAlert('id') && $telegramUser->wasRecentlyCreated) $telegram->sendMessage([
                            'chat_id' => self::groupAlert('id'),
                            'text' => "➕️ <b>{$telegramUser->accountLinkVisibly(false,$from['id'],($from['first_name'] ?? $from['username']))}</b> запустил бота",
                            "parse_mode" => "html",
                        ]);
                        $commands = $this->botCommandsFiltrated($telegramUser);
                        break;
                    case self::groupAdmin('id'):
                        $commands = self::groupAdmin('commands');
                        break;
                    case self::groupAlert('id'):
                        $commands = self::groupAlert('commands');
                        break;
                    default:
                        $commands = collect();
                        break;
                }
                if (!is_null($member) && !is_null($chatId)) {
                    $joined = TelegramUser::find(($member['id'] ?? null));
                    if (!is_null($joined) && !$joined->is_bot && $joined->isActive()) {
                        $bot = $telegram->getMe();
                        $telegram->sendMessage([
                            'chat_id' => $chatId,
                            'text' => makeText([
                                "😉 Добро пожаловать в чат, <b>{$joined->accountLinkVisibly()}</b>",
                                "",
                                "🤖 Бот: <b>@$bot->username</b>",
                                "💸 Канал с профитами: <b><a href='#'>Перейти</a></b>",
                            ]),
                            "parse_mode" => "html",
                        ]);
                    } else {
                        $telegram->kickChatMember([
                            "chat_id" => $chatId,
                            "user_id" => $member['id']
                        ]);
                        if ($alertGroupId = self::groupAlert('id')) $telegram->sendMessage([
                            'chat_id' => $alertGroupId,
                            'text' => '❗️ <b><a href="tg://user?id=' . $member['id'] . '">' . ($member['first_name'] ?? 'Без ника') . '</a> [' . $member['id'] . ']</b> кикнут с чата за попытку вступить по ссылке',
                            "parse_mode" => "html",
                        ]);
                    }
                }

                $dialogs = new Dialogs($telegram, $telegramUser);
                $commands = $commands->map(function ($command) use ($dialogs, $telegramUser) {
                    return new $command($dialogs, $telegramUser);
                });

                $telegram->addCommands($commands->toArray());
                $update = $telegram->commandsHandler(true);
                if (!$update->hasCommand()) {
                    $commandName = null;
                    if (!$update->isType('callback_query')) {
                        $commandName = array_search(trim($text), $config->get('btns'), true) ?? "";
                    } else if (preg_match('/^(\/[^\s\/]+)/', $text, $matches)) {
                        $commandName = str_replace('/', '', $matches[0]);
                    }

                    $command = $commands->first(function (BaseCommand $baseCommand) use ($commandName) {
                        return $baseCommand->getName() === $commandName;
                    });
                    if (!is_null($command)) $telegram->triggerCommand($command->getName(), $update);
                }
                if ($dialogs->exists($update)) {
                    $dialogs->proceed($update);
                }
            }
        } catch (TelegramUserPermissionException $permissionException) {
            $permissionException->report();
        } catch (TelegramSDKException | Exception $exception) {
            Log::error(json_encode($request->all()) . PHP_EOL . $exception->getMessage());
        }
        return response()->json(['msg' => 'ok']);
    }
}
