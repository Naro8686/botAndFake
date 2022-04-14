<?php

namespace App\Telegram\Dialogs;

use App\Models\Role;
use App\Models\TelegramUser;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Objects\Update;

class WebDialog extends Dialog
{
    protected $steps = [];
    public $btns;
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $webUser;

    /**
     * @param Update $update
     * @param TelegramUser $user
     */
    public function __construct(Update $update, TelegramUser $user)
    {
        parent::__construct($update, $user);
        $steps = [];
        $method = $this->getData('method', 'create');
        $this->webUser = $user->user()->where('users.telegram_id', $user->id)->firstOrNew([
            'telegram_id' => $user->id
        ]);

        $this->btns = $this->getConfig('btns');
        switch ($method) {
            case 'create':
            case 'edit':
                $steps = [$method, 'setName', 'setEmail', 'setPassword'];
                break;
        }
        $this->setSteps($steps);
    }

    public function create()
    {
        $this->telegram->sendMessage([
            'chat_id' => $this->getChat()->getId(),
            'text' => '🖋 <b>Имя</b>',
            "parse_mode" => "html",
            "reply_markup" => Keyboard::make([
                "keyboard" => [
                    [["text" => $this->getData('name', $this->webUser->name ?? $this->getUser()->getName(true))]],
                    [["text" => $this->btns['back']]]
                ],
                "resize_keyboard" => true,
                "one_time_keyboard" => false,
            ])
        ]);
    }

    public function setName()
    {
        $name = $this->isBack() || $this->getData('error', false)
            ? $this->getData('name')
            : trim($this->update->getMessage()->text);
        $validator = Validator::make(["name" => $name], [
            'name' => ['required', 'string', 'max:255']
        ]);
        if ($validator->fails()) throw new Exception($this->makeText($validator->errors()->all()), 422);
        else {
            $this->setData('name', $name);
            $this->telegram->sendMessage([
                'chat_id' => $this->getChat()->getId(),
                'text' => $this->makeText([
                    "🖋 <b>E-mail</b>"
                ]),
                "parse_mode" => "html",
                "reply_markup" => Keyboard::make([
                    "keyboard" => [
                        [["text" => $this->getData('email', $this->webUser->email ?? '')]],
                        [["text" => $this->btns->get('back', '/back')]],
                    ],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ])
            ]);
        }
    }

    public function setEmail()
    {
        $email = $this->isBack() || $this->getData('error', false)
            ? $this->getData('email', '')
            : trim($this->update->getMessage()->text);
        $validator = Validator::make(["email" => $email], [
            'email' => ['required', 'string', 'email', 'max:255', $this->webUser->id ? 'unique:users,email,' . $this->webUser->id : 'unique:users,email'],
        ]);
        if ($validator->fails()) throw new Exception($this->makeText($validator->errors()->all()), 422);
        else {
            $this->setData('email', $email);
            $this->telegram->sendMessage([
                'chat_id' => $this->getChat()->getId(),
                'text' => $this->makeText([
                    "🖋 <b>Пароль</b>"
                ]),
                "parse_mode" => "html",
                "reply_markup" => Keyboard::make([
                    "keyboard" => [
                        [["text" => $this->btns->get('back', '/back')]],
                    ],
                    "resize_keyboard" => true,
                    "one_time_keyboard" => false,
                ])
            ]);
        }
    }

    public function setPassword()
    {
        $password = $this->isBack() || $this->getData('error', false)
            ? $this->getData('password', '')
            : trim($this->update->getMessage()->text);
        $validator = Validator::make(["password" => $password], [
            'password' => ['required', 'string', 'min:8'],
        ]);
        if ($validator->fails()) throw new Exception($this->makeText($validator->errors()->all()), 422);
        else {
            $worker = Role::whereName(Role::WORKER)->first();
            $this->setData('password', $password);
            $this->setData('role_id', $worker->id);
            $data = $this->getData()->only(['name', 'email', 'password', 'role_id']);
            $this->getData('method', 'create') === 'edit'
                ? $this->update($data)
                : $this->store($data);
        }
    }

    private function update($data)
    {
        $tgUser = $this->getUser();
        $webUser = $tgUser->user;
        if ($webUser->update(['name' => $data['name'], 'email' => $data['email'], 'password' => Hash::make($data['password'])])) return $this->telegram->sendMessage([
            'chat_id' => $this->getChat()->getId(),
            'text' => "✅ <b>Аккаунт успешно обновлен</b>",
            "parse_mode" => "html",
            "reply_markup" => Keyboard::make([
                "keyboard" => [
                    [["text" => $this->btns->get('start', '/start')]]
                ],
                "resize_keyboard" => true,
                "one_time_keyboard" => false,
            ])
        ]);
        else throw new Exception();
    }

    private function store($data)
    {
        $this->webUser->role_id = $data['role_id'];
        $this->webUser->name = $data['name'];
        $this->webUser->email = $data['email'];
        $this->webUser->password = Hash::make($data['password']);
        $url = config('app.url');
        if ($this->webUser->save()) return $this->telegram->sendMessage([
            'chat_id' => $this->getChat()->getId(),
            'text' => $this->makeText([
                "✅ <b>Аккаунт успешно создан</b>",
                "---------------------------",
                "👤 <b>Логин:</b> <code>{$data['email']}</code>",
                "🔑 <b>Пароль:</b> <code>{$data['password']}</code>",
                "🌐 <b>URL:</b> <a href='$url'>{$url}</a>",
            ]),
            "parse_mode" => "html",
            "reply_markup" => Keyboard::make([
                "keyboard" => [
                    [["text" => $this->btns->get('start', '/start')]],
                ],
                "resize_keyboard" => true,
                "one_time_keyboard" => false,
            ])
        ]);
        else throw new Exception();
    }
}
