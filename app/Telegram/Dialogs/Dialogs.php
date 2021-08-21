<?php

namespace App\Telegram\Dialogs;

use App\Models\TelegramUser;
use Telegram\Bot\Api;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Objects\Update;

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
     * @var TelegramUser
     */
    protected $user;

    /**
     * @param Api $telegram
     * @param TelegramUser|null $telegramUser
     */
    public function __construct(Api $telegram, ?TelegramUser $telegramUser)
    {
        $this->telegram = $telegram;
        $this->user = $telegramUser ?? new TelegramUser();
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
        $user = $this->user;

        if (!$user->dialogExists()) {
            return false;
        }

        $next = $user->getDialog('next');
        $class = $user->getDialog('dialog');
        $memory = $user->getDialog('memory');


        if (!is_null($class) && class_exists($class)){
            /** @var Dialog $dialog */
            $dialog = new $class($update,$this->user);
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
        $dialog = self::get($update);

        if (!$dialog) {
            return;
        }
        $chatId = $dialog->getChat()->getId();
        try {
            $dialog->proceed();
        } catch (TelegramSDKException $e) {
        }

        if ($dialog->isEnd()) {
            $this->user->deleteDialog();
        } else {
            $this->setField($chatId, 'next', $dialog->getNext());
            $this->setField($chatId, 'memory', $dialog->getMemory());
        }
    }

    /**
     * @param Update $update
     * @return bool
     */
    public function exists(Update $update): bool
    {
        return $this->user->dialogExists();
    }

    /**
     * @param string $key
     * @param string $field
     * @param mixed $value
     */
    protected function setField($key, string $field, $value)
    {
        $this->user->dialogSetField($field, $value);
    }
}