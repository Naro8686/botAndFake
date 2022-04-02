<?php

namespace App\Telegram\Commands\Admin;

use App\Api\SmsApi;
use Telegram\Bot\Actions;
use Telegram\Bot\Exceptions\TelegramSDKException;


class GetSmsBalanceCommand extends BaseAdminCommand
{
    protected $name = "getSmsBalance";
    protected $description = "Количество оставшись смс";

    public function handle()
    {
        $user = $this->getUser();
        $user->deleteDialog();
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $update = $this->getUpdate();
        $data = SmsApi::getBalance()->getData(true);
        if (!$data['error']) $text = makeText([
            "☄️ <b>Данные успешно получены</b>",
            "",
            "💵 Количество оставшихся смс : <b>{$data['count']}</b>"
        ]);
        else $text = makeText([
            "❗️ <b>Ошибка</b>",
            "",
            "<i>{$data['msg']}</i>"
        ]);

        if ($update->isType('callback_query')) {
            $query = $update->callbackQuery;
            try {
                $this->getTelegram()->answerCallbackQuery([
                    'callback_query_id' => $query->get('id'),
                ]);
            } catch (TelegramSDKException $e) {
                $this->replyWithMessage([
                    "text" => $e->getMessage(),
                    "parse_mode" => "html",
                ]);
            }
        }
        $this->replyWithMessage([
            "text" => $text,
            "parse_mode" => "html",
        ]);
    }

}
