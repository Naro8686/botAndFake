<?php

use App\Telegram\Commands\AllFakesCommand;
use App\Telegram\Commands\AllUsersCommand;
use App\Telegram\Commands\ApproveCommand;
use App\Telegram\Commands\BackCommand;
use App\Telegram\Commands\ChangeStatusCommand;
use App\Telegram\Commands\CreateFakeCommand;
use App\Telegram\Commands\DefaultCommand;
use App\Telegram\Commands\DeleteAllFakesCommand;
use App\Telegram\Commands\DeleteFakeCommand;
use App\Telegram\Commands\DeleteUserCommand;
use App\Telegram\Commands\EditFakeCommand;
use App\Telegram\Commands\FakesCommand;
use App\Telegram\Commands\FindProfileCommand;
use App\Telegram\Commands\GetFakeCommand;
use App\Telegram\Commands\GetSmsBalanceCommand;
use App\Telegram\Commands\HideCommand;
use App\Telegram\Commands\LockCommand;
use App\Telegram\Commands\ProfileCommand;
use App\Telegram\Commands\HelpCommand;
use App\Telegram\Commands\RejectCommand;
use App\Telegram\Commands\RequestCommand;
use App\Telegram\Commands\RulesCommand;
use App\Telegram\Commands\SendSmsCommand;
use App\Telegram\Commands\SettingsCommand;
use App\Telegram\Commands\ShowCommand;
use App\Telegram\Commands\StartCommand;
use App\Telegram\Commands\UnLockCommand;

return [
    /*
    |--------------------------------------------------------------------------
    | Your Telegram Bots
    |--------------------------------------------------------------------------
    | You may use multiple bots at once using the manager class. Each bot
    | that you own should be configured here.
    |
    | Here are each of the telegram bots config parameters.
    |
    | Supported Params:
    |
    | - name: The *personal* name you would like to refer to your bot as.
    |
    |       - username: Your Telegram Bot's Username.
    |                       Example: (string) 'BotFather'.
    |
    |       - token:    Your Telegram Bot's Access Token.
                        Refer for more details: https://core.telegram.org/bots#botfather
    |                   Example: (string) '123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11'.
    |
    |       - commands: (Optional) Commands to register for this bot,
    |                   Supported Values: "Command Group Name", "Shared Command Name", "Full Path to Class".
    |                   Default: Registers Global Commands.
    |                   Example: (array) [
    |                       'admin', // Command Group Name.
    |                       'status', // Shared Command Name.
    |                       Acme\Project\Commands\BotFather\HelloCommand::class,
    |                       Acme\Project\Commands\BotFather\ByeCommand::class,
    |             ]
    */
    'bots' => [
        env('TELEGRAM_BOT_NAME', 'TestBot') => [
            'username' => 'fake_laravel_test_bot',
            'token' => env('TELEGRAM_BOT_TOKEN', '1915140685:AAHnSqN1Eo7AKJajI1I_YZS-mQQHcm-poAI'),
            'certificate_path' => env('TELEGRAM_CERTIFICATE_PATH'),
            'webhook_url' => env('TELEGRAM_WEBHOOK_URL', '/telegram/KvWMBBLWc7Z0YYAiAJ6g2Ni8IXozpzCvSkEPT9Dpfr59oPgjDD/webhook'),
            'groups' => [
                'admin' => [
                    'id' => env('ADMIN_GROUP'),
                    'commands' => [
                        ApproveCommand::class,
                        RejectCommand::class,
                    ],
                ],
                'alert' => [
                    'id' => env('ALERT_GROUP'),
                    'commands' => [],
                ],
            ],

            'commands' => [
                HelpCommand::class,
                StartCommand::class,
                BackCommand::class,
                ProfileCommand::class,
                DefaultCommand::class,
                RequestCommand::class,
                RulesCommand::class,
                SettingsCommand::class,
                CreateFakeCommand::class,
                GetFakeCommand::class,
                FakesCommand::class,
                EditFakeCommand::class,
                DeleteFakeCommand::class,
                GetSmsBalanceCommand::class,
                SendSmsCommand::class,
                LockCommand::class,
                UnLockCommand::class,
                AllFakesCommand::class,
                AllUsersCommand::class,
                FindProfileCommand::class,
                DeleteUserCommand::class,
                ShowCommand::class,
                HideCommand::class,
                ChangeStatusCommand::class,
                DeleteAllFakesCommand::class
            ],
            'btns' => [
                "profile" => "👤 Профиль",
                "fakes" => "🗃 Объявления",
                "getFake" => "🔖 Получить данные",
                "delete" => "🗑 Удалить",
                "edit" => "🖍 Изменить",
                "createFake" => "📝 Создать",
                "request" => "📤 Подать заявку",
                "start" => "⬆️ Начало",
                "cancel" => "❌️ Отмена",
                "approve" => "✅️ Принять",
                "reject" => "❌️ Отказать",
                "back" => "⬅️️ Назад",
                "settings" => "⚙️ Настройки",
                "default" => "☑️️ Данные по умолчанию",
                "rules" => "🧾 Правила",
                "sendSms" => "📲 Отправить сообщение",
                "getSmsBalance" => "📮 Количество смс",
                "lock" => "🔒 Заблокировать",
                "unlock" => "🔓 Разблокировать",
                "allUsers" => "👥 Все пользователи",
                "allFakes" => "📇 Все объявления",
                "findProfile" => "🔍 Найти пользователя",
                "show" => "✅ Показать имя",
                "hide" => "📵 Скрыть имя",
                "deleteAllFakes" => "❌ Удалить все объявление"
            ],
            'currency' => env('CURRENCY', '$')
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Bot Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the bots you wish to use as
    | your default bot for regular use.
    |
    */
    'default' => env('TELEGRAM_BOT_NAME', 'TestBot'),

    /*
    |--------------------------------------------------------------------------
    | Asynchronous Requests [Optional]
    |--------------------------------------------------------------------------
    |
    | When set to True, All the requests would be made non-blocking (Async).
    |
    | Default: false
    | Possible Values: (Boolean) "true" OR "false"
    |
    */
    'async_requests' => env('TELEGRAM_ASYNC_REQUESTS', false),

    /*
    |--------------------------------------------------------------------------
    | HTTP Client Handler [Optional]
    |--------------------------------------------------------------------------
    |
    | If you'd like to use a custom HTTP Client Handler.
    | Should be an instance of \Telegram\Bot\HttpClients\HttpClientInterface
    |
    | Default: GuzzlePHP
    |
    */
    'http_client_handler' => null,

    /*
    |--------------------------------------------------------------------------
    | Resolve Injected Dependencies in commands [Optional]
    |--------------------------------------------------------------------------
    |
    | Using Laravel's IoC container, we can easily type hint dependencies in
    | our command's constructor and have them automatically resolved for us.
    |
    | Default: true
    | Possible Values: (Boolean) "true" OR "false"
    |
    */
    'resolve_command_dependencies' => true,

    /*
    |--------------------------------------------------------------------------
    | Register Telegram Global Commands [Optional]
    |--------------------------------------------------------------------------
    |
    | If you'd like to use the SDK's built in command handler system,
    | You can register all the global commands here.
    |
    | Global commands will apply to all the bots in system and are always active.
    |
    | The command class should extend the \Telegram\Bot\Commands\Command class.
    |
    | Default: The SDK registers, a help command which when a user sends /help
    | will respond with a list of available commands and description.
    |
    */
    'commands' => [
        //Telegram\Bot\Commands\HelpCommand::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Command Groups [Optional]
    |--------------------------------------------------------------------------
    |
    | You can organize a set of commands into groups which can later,
    | be re-used across all your bots.
    |
    | You can create 4 types of groups:
    | 1. Group using full path to command classes.
    | 2. Group using shared commands: Provide the key name of the shared command
    | and the system will automatically resolve to the appropriate command.
    | 3. Group using other groups of commands: You can create a group which uses other
    | groups of commands to bundle them into one group.
    | 4. You can create a group with a combination of 1, 2 and 3 all together in one group.
    |
    | Examples shown below are by the group type for you to understand each of them.
    */
    'command_groups' => [
        /* // Group Type: 1
           'commmon' => [
                Acme\Project\Commands\TodoCommand::class,
                Acme\Project\Commands\TaskCommand::class,
           ],
        */

        /* // Group Type: 2
           'subscription' => [
                'start', // Shared Command Name.
                'stop', // Shared Command Name.
           ],
        */

        /* // Group Type: 3
            'auth' => [
                Acme\Project\Commands\LoginCommand::class,
                Acme\Project\Commands\SomeCommand::class,
            ],

            'stats' => [
                Acme\Project\Commands\UserStatsCommand::class,
                Acme\Project\Commands\SubscriberStatsCommand::class,
                Acme\Project\Commands\ReportsCommand::class,
            ],

            'admin' => [
                'auth', // Command Group Name.
                'stats' // Command Group Name.
            ],
        */

        // Group Type: 4
        'myBot' => [
            'admin', // Command Group Name.
            'subscription', // Command Group Name.
            'status', // Shared Command Name.
            'Acme\Project\Commands\BotCommand' // Full Path to Command Class.
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Shared Commands [Optional]
    |--------------------------------------------------------------------------
    |
    | Shared commands let you register commands that can be shared between,
    | one or more bots across the project.
    |
    | This will help you prevent from having to register same set of commands,
    | for each bot over and over again and make it easier to maintain them.
    |
    | Shared commands are not active by default, You need to use the key name to register them,
    | individually in a group of commands or in bot commands.
    | Think of this as a central storage, to register, reuse and maintain them across all bots.
    |
    */
    'shared_commands' => [
        // 'start' => Acme\Project\Commands\StartCommand::class,
        // 'stop' => Acme\Project\Commands\StopCommand::class,
        // 'status' => Acme\Project\Commands\StatusCommand::class,
    ],
];
