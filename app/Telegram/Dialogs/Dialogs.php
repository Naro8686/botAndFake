<?php

namespace App\Telegram\Dialogs;

use App\Models\TelegramUser;
use Log;
use Telegram\Bot\Api;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Objects\Update;
use Throwable;

/**
 * Class Dialogs
 * @package BotDialogs
 */
class Dialogs
{
    /**
     * @var Api
     */
    protected $telegram;

    /**
     * @var TelegramUser|null
     */
    protected $user;

    /**
     * @param Api $telegram
     * @param TelegramUser|null $telegramUser
     */
    public function __construct(Api $telegram, ?TelegramUser $telegramUser)
    {
        $this->telegram = $telegram;
        $this->user = $telegramUser;
    }

    /**
     * @param Dialog $dialog
     * @return Dialog
     */
    public function add(Dialog $dialog): Dialog
    {
        $dialog->setTelegram($this->telegram);

        $chatId = $dialog->getChat()->getId();
        $this->setField($chatId, 'next', $dialog->getNext());
        $this->setField($chatId, 'dialog', get_class($dialog));
        $this->setField($chatId, 'memory', $dialog->getMemory());

        return $dialog;
    }

    /**
     * @param Update $update
     * @return Dialog|false
     * @internal param $chatId
     */
    public function get(Update $update)
    {
        $dialog = false;
        $chatId = $update->getMessage()->getChat()->getId();
        $user = $this->getUser($chatId);

        if (!$user->dialogExists()) {
            return false;
        }

        $next = $user->getDialog('next');
        $class = $user->getDialog('dialog');
        $memory = $user->getDialog('memory');


        if (!is_null($class) && class_exists($class)) {
            /** @var Dialog $dialog */
            $dialog = new $class($update, $this->getUser($chatId));
            $dialog->setTelegram($this->telegram);

            $dialog->setNext($next);
            $dialog->setMemory($memory);
        }
        return $dialog;
    }

    /**
     * @param Update $update
     */
    public function proceed(Update $update)
    {
        try {
            $dialog = self::get($update);

            if (!$dialog) return;
            $chatId = $dialog->getChat()->getId();
            $dialog->proceed();
            if ($dialog->isEnd()) $this->getUser($chatId)->deleteDialog();
            else {
                $this->setField($chatId, 'next', $dialog->getNext());
                $this->setField($chatId, 'memory', $dialog->getMemory());
            }
        } catch (Throwable|TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }

    /**
     * @param Update $update
     * @return bool
     */
    public function exists(Update $update): bool
    {
        $chatId = $update->getMessage()->getChat()->getId();
        return $this->getUser($chatId)->dialogExists();
    }

    /**
     * @param string $key
     * @param string $field
     * @param mixed $value
     */
    protected function setField(string $key, string $field, $value)
    {
        $this->getUser($key)->dialogSetField($field, $value);
    }

    /**
     * @param null $id
     * @return TelegramUser|null
     */
    public function getUser($id = null): ?TelegramUser
    {
        return $this->user ?? TelegramUser::whereId($id)->first();
    }
}
