<?php

namespace App\Telegram\Dialogs;

use App\Api\SendGridApi;
use App\Models\Sendgrid;
use Log;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Throwable;

class AddTokenSendGridDialog extends Dialog
{
    protected $steps = [
        'index',
        'setToken',
        'setDomain'
    ];

    public function index()
    {
        try {
            $this->telegram->sendMessage([
                "chat_id" => $this->getChat()->getId(),
                "text" => "❕<i>Напишите токен</i>",
                "parse_mode" => "html",
            ]);
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
    }


    public function setToken()
    {
        try {
            $message = $this->update->getMessage();
            $isBackOrErr = $this->isBack() || $this->getData('error');
            $token = $isBackOrErr
                ? $this->getData('token')
                : trim($message->getText());
            $isCommand = in_array(trim($token), $this->getConfig('btns')->toArray(), true);
            if (!empty($token) && !$message->from->isBot && !$isCommand) {
                $errors = [];
                if (!$isBackOrErr) {
                    $api = new SendGridApi($token);
                    $response = $api->userCredits();
                    $data = $response->getData();
                    if ($response->getStatusCode() === 403) {
                        $errors[] = "❗️ <i>$data->msg</i>";
                    } elseif (!$data->error && $data->count < 1) {
                        $errors[] = "❗️ <i>Лимит исчерпан</i>";
                    } elseif ($data->error) {
                        $errors[] = "❗️ <i>$data->msg</i>";
                    } elseif (Sendgrid::whereToken($token)->exists()) {
                        $errors[] = "❗️ <i>Такой токен уже существует</i>";
                    }
                }
                if (!empty($errors)) {
                    $this->telegram->sendMessage([
                        'chat_id' => $this->getChat()->getId(),
                        'text' => $this->makeText($errors),
                        "parse_mode" => "html",
                    ]);
                    $this->jump('index');
                    $this->proceed();
                } else {
                    $this->setData('error', false);
                    $this->setData('token', $token);
                    $this->telegram->sendMessage([
                        "chat_id" => $this->getChat()->getId(),
                        "text" => "❕<i>Напишите домен отправителя</i>",
                        "parse_mode" => "html",
                    ]);
                }
            } else {
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>Поле не может быть пустым</i>",
                    "parse_mode" => "html",
                ]);
                $this->jump('index');
                $this->proceed();
            }
        } catch (TelegramSDKException|Throwable $e) {
            Log::error($e->getMessage());
        }
    }

    public function setDomain()
    {
        try {
            $message = $this->update->getMessage();
            $domain = trim($message->getText());
            $isCommand = in_array(trim($domain), $this->getConfig('btns')->toArray(), true);
            if (!empty($domain) && !$message->from->isBot && !$isCommand) {
                $parse = parse_url($domain);
                $domain = $parse['host'] ?? $parse['path'] ?? null;
                $error = false;
                if (is_null($domain)) {
                    $error = true;
                } elseif (!preg_match('/^(?!\-)(?:(?:[a-zA-Z\d][a-zA-Z\d\-]{0,61})?[a-zA-Z\d]\.){1,126}(?!\d+)[a-zA-Z\d]{1,63}$/u', $domain)) {
                    $error = true;
                }
                $this->setData('error', $error);
                if ($error) {
                    $this->telegram->sendMessage([
                        'chat_id' => $this->getChat()->getId(),
                        'text' => $this->makeText([
                            "❗️ <i>Укажите корректные данные</i>",
                            "<i>Пример</i>: <code>example.com</code>"
                        ]),
                        "parse_mode" => "html",
                    ]);
                    $this->jump('setToken');
                    $this->proceed();
                } else {
                    Sendgrid::create([
                        'domain' => $domain,
                        'token' => $this->getData('token')
                    ]);
                    $this->telegram->sendMessage([
                        "chat_id" => $this->getChat()->getId(),
                        "text" => "✅ <b>Токен успешно сохранено</b>",
                        "parse_mode" => "html",
                    ]);
                    $this->end();
                }
            } else {
                $this->telegram->sendMessage([
                    'chat_id' => $this->getChat()->getId(),
                    'text' => "❗️ <i>Поле не может быть пустым</i>",
                    "parse_mode" => "html",
                ]);
                $this->setData('error', true);
                $this->jump('setToken');
                $this->proceed();
            }
        } catch (TelegramSDKException|Throwable $e) {
            Log::error($e->getMessage());
        }
    }
}
