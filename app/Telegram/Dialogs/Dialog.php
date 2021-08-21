<?php

namespace App\Telegram\Dialogs;

use App\Http\Controllers\Telegram\BotController;
use App\Models\TelegramUser;
use DOMDocument;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Log;
use Telegram\Bot\Actions;
use Telegram\Bot\Api;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Objects\Chat;
use Telegram\Bot\Objects\Update;

class Dialog
{
    protected $steps = [];
    /**
     * @var int Next step
     */
    protected $next = 0;
    protected $current = 0;
    protected $yes = null;
    protected $no = null;
    protected $aliases = [
        'yes' => ['yes', 'да'],
        'no' => ['no', 'нет']
    ];


    /**
     * @param int $next
     */
    public function setNext(int $next)
    {
        $this->next = $next;
    }

    /**
     * @return array
     */
    public function getSteps(): array
    {
        return $this->steps;
    }

    /**
     * @return int
     */
    public function getNext(): int
    {
        return $this->next;
    }

    /**
     * @return TelegramUser
     */
    public function getUser(): TelegramUser
    {
        return $this->user ?? new TelegramUser();
    }

    /**
     * @return int
     */
    public function getCurrent(): int
    {
        return $this->current;
    }

    /**
     * @var Api
     */
    protected $telegram;

    /**
     * @param Api $telegram
     */
    public function setTelegram(Api $telegram)
    {
        $this->telegram = $telegram;
    }

    /**
     * @var TelegramUser
     */
    protected $user;

    /**
     * @param TelegramUser $telegramUser
     */
    public function setUser(TelegramUser $telegramUser)
    {
        $this->user = $telegramUser;
    }

    /**
     * @var Update
     */
    protected $update;
    protected $memory = '';

    /**
     * @param string $memory
     */
    public function setMemory(string $memory)
    {
        $this->memory = $memory;
    }

    /**
     * @return string
     */
    public function getMemory(): string
    {
        return $this->memory;
    }

    /**
     * @param Update $update
     * @param TelegramUser|null $user
     */
    public function __construct(Update $update, ?TelegramUser $user)
    {
        $this->update = $update;
        $this->user = $user;
    }


    public function isBack(): bool
    {
        $btns = $this->getConfig('btns');
        $update = $this->update;
        $commandName = null;
        if ($update->isType('callback_query')) {
            $query = $update->callbackQuery;
            $data = $query->get('data');
            if (preg_match('/^(\/[^\s\/]+)/', $data, $matches)) {
                $commandName = str_replace('/', '', $matches[0]);
            }
            try {
                $this->telegram->answerCallbackQuery([
                    'callback_query_id' => $query->get('id'),
                ]);
            } catch (TelegramSDKException $e) {
            }
        } else {
            $commandName = $update->getMessage()->get('text');
        }
        return $commandName === $btns->get('back');
    }


    public function start()
    {
        $this->next = 0;
        try {
            $this->proceed();
        } catch (TelegramSDKException $e) {
        }
    }

    /**
     * @throws TelegramSDKException
     */
    public function proceed()
    {

        $this->current = $this->next;

        if ($this->isEnd()) {
            return;
        }
        $this->telegram->sendChatAction([
            'chat_id' => $this->update->getMessage()->getChat()->getId(),
            'action' => Actions::TYPING
        ]);

        $step = $this->steps[$this->current];

        if (is_array($step)) {
            if (!isset($step['name'])) {
                throw new TelegramSDKException('Dialog step name must be defined.');
            }

            $name = $step['name'];
        } elseif (is_string($step)) {
            $name = $step;
        } else {
            throw new TelegramSDKException('Dialog step is not defined.');
        }

        // Flush yes/no state
        $this->yes = null;
        $this->no = null;

        if (is_array($step)) {
            if (isset($step['is_dich']) && $step['is_dich'] && $this->processYesNo($step)) {
                return;
            } elseif (!empty($step['jump'])) {
                $this->jump($step['jump']);
            }
        }

        $this->$name($step);

        // Step forward only if did not changes inside the step handler
        if ($this->next == $this->current) {
            $this->next++;
        }

    }

    /**
     * Process yes-no scenery
     *
     * @param array $step
     *
     * @return bool True if no further procession required (jumped to another step)
     * @throws TelegramSDKException
     */
    protected function processYesNo(array $step): bool
    {
        $message = $this->update->getMessage()->getText();
        $message = mb_strtolower(trim($message));
        $message = preg_replace('![%#,:&*@_\'\"\\\+\^\(\)\[\]\-\$\!\?\.]+!ui', '', $message);
        if (in_array($message, $this->aliases['yes'])) {
            $this->yes = true;

            if (!empty($step['yes'])) {
                $this->jump($step['yes']);
                $this->proceed();

                return true;
            }
        } elseif (in_array($message, $this->aliases['no'])) {
            $this->no = true;

            if (!empty($step['no'])) {
                $this->jump($step['no']);
                $this->proceed();

                return true;
            }
        } elseif (!empty($step['default'])) {
            $this->jump($step['default']);
            $this->proceed();

            return true;
        }

        return false;
    }

    /**
     * Jump to the particular step of the dialog
     * @param $step
     */
    public function jump($step)
    {
        foreach ($this->steps as $index => $value) {
            if (((is_array($value) && $value['name'] === $step) || $value === $step)) {
                $this->setNext($index);
                break;
            }
        }
    }

    /**
     * @todo Maybe the better way is that to return true/false from step-methods.
     * @todo ...And if it returns false - it means end of dialog
     */
    public function end()
    {
        $this->next = count($this->steps);
    }

    /**
     * Remember information for the next step usage. It works with Dialogs management class that store data to Redis.
     * @param string $value
     * @return mixed
     */
    public function remember(string $value = '')
    {
        if (!$value && $this->memory !== '') {
            return json_decode($this->memory);
        }

        $this->memory = json_encode($value);
    }

    /**
     * Check if dialog ended
     * @return bool
     */
    public function isEnd(): bool
    {
        return ($this->next >= count($this->steps));
    }

    /**
     * Returns Telegram chat object
     * @return Chat
     */
    public function getChat()
    {
        return $this->update->getMessage()->getChat();
    }

    /**
     * @param string $name
     * @param array $args
     *
     * @return bool
     * @throws TelegramSDKException
     */
    public function __call(string $name, array $args)
    {
        if (count($args) === 0) {
            return false;
        }

        $step = $args[0];

        if (!is_array($step)) {
            throw new TelegramSDKException('For string steps method must be defined.');
        }

        // @todo Add logging
        if (isset($step['response'])) {
            $params = [
                'chat_id' => $this->getChat()->getId(),
                'text' => $step['response']
            ];

            if (isset($step['markdown']) && $step['markdown']) {
                $params['parse_mode'] = 'Markdown';
            }

            $this->telegram->sendMessage($params);
        }

        if (!empty($step['jump'])) {
            $this->jump($step['jump']);
        }

        if (isset($step['end']) && $step['end']) {
            $this->end();
        }

        return true;
    }

    /**
     * @param $steps
     */
    public function setSteps($steps)
    {
        $this->steps = $steps;
    }

    public function makeText($text = []): string
    {
        return makeText($text);
    }

    public function setData($key, $value = null)
    {
        $data = $this->getData();
        $data[$key] = $value;
        $this->setMemory($data->toJson());
    }

    /**
     * @return  Collection|string|null
     */
    public function getData($key = null)
    {
        $data = collect(json_decode($this->getMemory(), true));
        return is_null($key) ? $data : $data[$key] ?? null;
    }

    /**
     * @param string|null $field
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|Collection|mixed
     */
    public function getConfig(string $field = null)
    {
        return BotController::getConfig($field);
    }

    /**
     * @param string $path
     * @param string $ext
     * @return false|string
     */
    public function downloadFile(string $path, string $ext = 'jpg')
    {
        $client = new Client();
        try {
            $token = $this->getConfig('token');
            $url = "https://api.telegram.org/file/bot$token/$path";
            $request = $client->request('GET', $url);

            if ($request->getStatusCode() === 200) {
                $image = $request->getBody()->getContents();
                $name = md5(time() . $this->getUser()->getName());

                Storage::put("public/images/$name.$ext", $image);

                return "storage/images/$name.$ext";
            }
        } catch (GuzzleException $e) {
        }
        return false;
    }

}