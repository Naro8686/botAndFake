<?php

namespace App\Telegram\Dialogs;

use App\Http\Controllers\Telegram\BotController;
use App\Models\TelegramUser;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Config\Repository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Log;
use Telegram\Bot\Actions;
use Telegram\Bot\Api;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Objects\Chat;
use Telegram\Bot\Objects\Update;
use Throwable;

class Dialog
{
    protected $steps = [];
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
        $this->setMemory((string)$user->getDialog("memory"));
    }


    public function isBack(): bool
    {
        $commandName = null;
        try {
            $btns = $this->getConfig('btns');
            $update = $this->update;
            if ($update->isType('callback_query')) {
                $query = $update->callbackQuery;
                $data = $query->get('data');
                if (preg_match('/^(\/[^\s\/]+)/', $data, $matches)) {
                    $commandName = str_replace('/', '', $matches[0]);
                }
                $this->telegram->answerCallbackQuery([
                    'callback_query_id' => $query->get('id'),
                ]);
            } else $commandName = $update->getMessage()->get('text');
            return !is_null($commandName) && $commandName === $btns->get('back');
        } catch (TelegramSDKException $e) {
            return true;
        } catch (Throwable $exception) {
            Log::error($exception->getMessage());
        }
        return false;
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
        try {
            $this->$name($step);
            $this->setData('error', false);
        } catch (Throwable|TelegramSDKException $exception) {
            if (!$exception instanceof TelegramSDKException) {
                try {
                    $this->setData('error', true);
                    $this->telegram->sendMessage([
                        'chat_id' => $this->getChat()->getId(),
                        'text' => $this->makeText([
                            "❗️ <i>Что-то пошло не так</i>"
                        ]),
                        "parse_mode" => "html",
                    ]);
                    $steps = $this->getSteps();
                    $key = (array_search($step, $steps) - 1);
                    $jump = $key <= 0 ? 0 : $key;
                    if ($steps[$jump] !== $step) {
                        $this->jump($steps[$jump]);
                        $this->proceed();
                    } else {
                        $this->end();
                    }
                } catch (Throwable $e) {
                    Log::error("Dialog::proceed - {$e->getMessage()}");
                }
            }
        }


        // Step forward only if did not change inside the step handler
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
        try {
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
        } catch (Throwable $throwable) {
            Log::error("processYesNo: {$throwable->getMessage()}");
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

    public function end(): bool
    {
        $countSteps = count($this->steps);
        $this->next = $countSteps;
        return (bool)$countSteps;
    }

    /**
     * Remember information for the next step usage. It works with Dialogs management class that store data to Redis.
     * @param string $value
     * @return mixed
     */
    public function remember(string $value = '')
    {
        if (!$value && $this->memory !== '') {
            return json_decode($this->memory, true, 512, JSON_UNESCAPED_UNICODE);
        }

        $this->memory = json_encode($value, JSON_UNESCAPED_UNICODE);
        return $this->memory;
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
    public function getChat(): Chat
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
        $this->setMemory($data->toJson(JSON_UNESCAPED_UNICODE));
    }


    /**
     * @param null $key
     * @param null $default
     * @return Collection|mixed|null
     */
    public function getData($key = null, $default = null)
    {
        $data = collect(json_decode($this->getMemory(), true, 512, JSON_UNESCAPED_UNICODE));
        $data = is_null($key) ? $data : $data[$key] ?? null;
        return is_null($data) ? $default : $data;
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
