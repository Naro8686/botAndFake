<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Actions;


/**
 * Class HelpCommand.
 */
class GenerateTokenCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'generateToken';

    /**
     * @var string Command Description
     */
    protected $description = 'Сгенерировать токен';


    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $user = $this->getUser();
        $user->tokens()->delete();
        $token = $user->createToken('bot_parser')->plainTextToken;
        $this->replyWithMessage([
            "text" => makeText([
                "<b>Токен сгенерирован</b>",
                "",
                "<i>Ваш персональный токен</i> <code>$token</code>",
            ]),
            "parse_mode" => "html",
        ]);
    }
}