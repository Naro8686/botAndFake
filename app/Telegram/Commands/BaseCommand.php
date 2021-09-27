<?php

namespace App\Telegram\Commands;

use App\Exceptions\TelegramUserPermissionException;
use App\Http\Controllers\Telegram\BotController;
use App\Models\TelegramUser;
use App\Telegram\Dialogs\Dialogs;
use Illuminate\Config\Repository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Collection;
use Telegram\Bot\Api;
use Telegram\Bot\Commands\Command;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Objects\Update;

/**
 * Class HelpCommand.
 */
abstract class BaseCommand extends Command
{
    /**
     * @var Dialogs
     */
    protected $dialogs;
    /**
     * @var TelegramUser|null
     */
    protected $user;

    protected $permissionName = null;


    /**
     * @param TelegramUser|null $user
     * @param Dialogs $dialogs
     */
    public function __construct(Dialogs $dialogs, ?TelegramUser $user)
    {
        $this->user = $user;
        $this->dialogs = $dialogs;
    }


    /**
     * Process Inbound Command.
     *
     * @param Api $telegram
     * @param Update $update
     * @param array $entity
     *
     * @return mixed
     * @throws TelegramUserPermissionException
     */
    public function make(Api $telegram, Update $update, array $entity)
    {
        $this->telegram = $telegram;
        $this->update = $update;
        $this->entity = $entity;
        $this->arguments = $this->parseCommandArguments();
        if ($user = $this->getUser()) {
            if ($user->banned()) {
                throw new TelegramUserPermissionException($user, "⛔️️ <b><i>Вас заблокировали!</i></b>", 403);
            } elseif (!$this->checkPermission($user->role->name ?? null)) {
                throw new TelegramUserPermissionException($user, "❌️️ <b><i>Доступ запрещен!</i></b>", 401);
            }
        }
        return call_user_func_array([$this, 'handle'], array_values($this->getArguments()));
    }

    /**
     * @param string $permissionName
     * @return $this
     */
    public function setPermission(string $permissionName): BaseCommand
    {
        $this->permissionName = $permissionName;
        return $this;
    }

    public function getPermission()
    {
        return $this->permissionName;
    }

    /**
     * @param string|null $permissionName
     * @return bool
     */
    public function checkPermission(string $permissionName = null): bool
    {
        return is_null($this->getPermission()) || ($permissionName === $this->getPermission());
    }

    public function dialogs(): Dialogs
    {
        return $this->dialogs;
    }


    /**
     * @return TelegramUser
     */
    public function getUser(): TelegramUser
    {
        return $this->user ?? new TelegramUser();
    }


    /**
     * @param string|null $field
     * @return Repository|Application|Collection|mixed
     */
    public function getConfig(string $field = null)
    {
        return BotController::getConfig($field);
    }

    /**
     * @param $regex
     *
     * @return Collection
     */
    private function extractVariableNames($regex): Collection
    {
        preg_match_all($regex, $this->pattern, $matches);

        return collect($matches[1]);
    }

    private function checkForCustomRegex(Collection $required, Collection $optional): string
    {
        if ($this->pattern && $required->isEmpty() && $optional->isEmpty()) {
            return $this->pattern;
        }

        return '';
    }

    /**
     * @param Collection $required
     * @param Collection $optional
     *
     * @param string $customRegex
     *
     * @return string
     */
    private function prepareRegex(Collection $required, Collection $optional, string $customRegex): string
    {
        $optionalBotName = '(?:@.+?bot)?\s+?';

        if ($customRegex) {
            $customRegex = "(?P<custom>$customRegex)";
        }

        $required = $required
            ->map(function ($varName) {
                return "(?P<$varName>[^ ]++)";
            })
            ->implode('\s+?');

        $optional = $optional
            ->map(function ($varName) {
                return "(?:\s+?(?P<$varName>[^ ]++))?";
            })
            ->implode('');

        return "%/{$this->getName()}{$optionalBotName}{$required}{$optional}{$customRegex}%si";
    }

    private function formatMatches(array $matches, Collection $required, Collection $optional)
    {
        return collect($matches)
            ->intersectByKeys(
                $required
                    ->merge($optional)
                    //incase this was a custom regex search we need to add a custom key
                    ->push('custom')
                    ->flip()
            )->all();
    }

    /**
     * Parse Command Arguments.
     *
     * @return array
     */
    protected function parseCommandArguments(): array
    {
        $update = $this->getUpdate();
        if ($update->isType('callback_query')) {
            $query = $update->callbackQuery;
            $data = $query->get('data');
//            try {
//                $this->getTelegram()->answerCallbackQuery([
//                    'callback_query_id' => $query->get('id'),
//                ]);
//            } catch (TelegramSDKException $e) {
//            }
        } else {
            $data = $this->relevantMessageSubString();
        }

        //Extract variable names from the supplied pattern
        $required = $this->extractVariableNames('/\{([^\d]\w+?)\}/');
        $optional = $this->extractVariableNames('/\{([^\d]\w+?)\?\}/');
        $customRegex = $this->checkForCustomRegex($required, $optional);

        //Generate the regex needed to search for this pattern
        $regex = $this->prepareRegex($required, $optional, $customRegex);
        preg_match($regex, $data, $matches);

        return $this->formatMatches($matches, $required, $optional);
    }

    /**
     * @return bool|string
     */
    private function relevantMessageSubString()
    {
        //Get all the bot_command offsets in the Update object
        $commandOffsets = $this->allCommandOffsets();

        if ($commandOffsets->isEmpty()) {
            return $this->getUpdate()->getMessage()->text;
        }

        //Extract the current offset for this command and, if it exists, the offset of the NEXT bot_command entity
        $splice = $commandOffsets->splice(
            $commandOffsets->search($this->entity['offset']),
            2
        );

        return $splice->count() === 2 ? $this->cutTextBetween($splice) : $this->cutTextFrom($splice);
    }

    private function cutTextBetween(Collection $splice)
    {
        return substr(
            $this->getUpdate()->getMessage()->text,
            $splice->first(),
            $splice->last() - $splice->first()
        );
    }

    private function cutTextFrom(Collection $splice)
    {
        return substr(
            $this->getUpdate()->getMessage()->text,
            $splice->first()
        );
    }

    /**
     * @return Collection
     */
    private function allCommandOffsets(): Collection
    {
        $message = $this->getUpdate()
            ->getMessage();

        return !$message->hasCommand() ?
            collect() :
            $message
                ->get('entities', collect())
                ->filter(function ($entity) {
                    return $entity['type'] === 'bot_command';
                })
                ->pluck('offset');
    }
}