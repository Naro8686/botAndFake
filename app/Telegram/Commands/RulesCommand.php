<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

/**
 * Class HelpCommand.
 */
class RulesCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'rules';

    /**
     * @var string Command Description
     */
    protected $description = 'Наши правила';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->getUser()->deleteDialog();
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $this->replyWithMessage([
            "text" => makeText([
                "📜️ <b><i>$this->description</i></b>",
                "",
                "1. В чате запрещена реклама, флуд, спам, недопустимый контент",
                "2. Профит заблокированного воркера либо не состоящего в чате не выплачивается",
                "3. Мы не несем ответственности за блокировку карт и кошельков"
            ]),
            "parse_mode" => "html"
        ]);
    }
}