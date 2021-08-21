<?php

namespace App\Telegram\Dialogs;

use App\Models\TelegramUser;
use Log;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Objects\Update;

class DefaultDialog extends Dialog
{
    protected $steps = [
        'index',
        'setRecipient',
        'setAddress',
    ];
    /**
     * @var mixed
     */
    public $btns;
    /**
     * @var \Illuminate\Support\Collection|mixed|null
     */
    public $default;

    public function __construct(Update $update, TelegramUser $user)
    {
        parent::__construct($update, $user);
        $this->btns = $this->getConfig('btns');
        $this->default = $user->getSettings('default') ?? [];
    }

    public function index()
    {
        try {
            $this->setData('error', false);
            $text = $this->makeText(["🖋 <b>Введите имя и фамилию получателя</b>",]);
            $keyboard = Keyboard::make([
                "keyboard" => [
                    [["text" => $this->getData('recipient') ?? $this->default['recipient'] ?? '']],
                    [["text" => $this->btns->get('back') ?? '']],
                ],
                "resize_keyboard" => true,
                "one_time_keyboard" => false,
            ]);
            $this->telegram->sendMessage([
                'chat_id' => $this->getChat()->getId(),
                'text' => $text,
                "parse_mode" => "html",
                "reply_markup" => $keyboard
            ]);
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }

    public function setRecipient()
    {
        try {
            $recipient = $this->isBack() || $this->getData('error')
                ? $this->getData('recipient') ?? ''
                : trim($this->update->getMessage()->getText());
            list($fname, $lname) = array_pad(explode(' ', $recipient), 2, null);
            if (!empty($recipient) && !(is_null($fname) || is_null($lname))) {
                $this->setData('recipient', $recipient);
                $this->setData('error', false);
                $text = $this->makeText([
                    "🖋 <b>Введите полный адрес получателя</b>",
                    "",
                    "❕ <i>Пример: 00-001, г. Warsaw, ul. Kurwa, d. 2</i>"
                ]);
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [["text" => $this->getData('address') ?? $this->default['address'] ?? '']],
                        [["text" => $this->btns->get('back') ?? '']],
                    ],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => $text,
                    "parse_mode" => "html",
                    "reply_markup" => $keyboard
                ]);
            } else {
                $this->setData('error', true);
                $text = "Не указано ";
                $text .= is_null($fname) ? "имя" : "фамилия";
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>$text</i>",
                    "parse_mode" => "html"
                ]);
                $this->jump('index');
                $this->proceed();
            }
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }

    public function setAddress()
    {
        try {
            $address = $this->isBack() || $this->getData('error')
                ? $this->getData('address') ?? ''
                : trim($this->update->getMessage()->getText());

            if (!empty($address) && strlen($address) > 4) {
                $this->setData('address', $address);
                $this->setData('error', false);
                $data = $this->getData()->only(['recipient', 'address'])->toArray();
                $this->getUser()->setSettings('default', $data);
                $keyboard = Keyboard::make([
                    "keyboard" => [
                        [["text" => $this->btns->get('start') ?? '']],
                    ],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ]);
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "✅ <b>Данные успешно сохранены</b>",
                    "parse_mode" => "html",
                    "reply_markup" => $keyboard
                ]);
                $this->telegram->triggerCommand('start', $this->update);
            } else {
                $this->setData('error', true);
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>Адрес указан неправильно</i>",
                    "parse_mode" => "html",
                ]);
                $this->jump('setRecipient');
                $this->proceed();
            }
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }
}