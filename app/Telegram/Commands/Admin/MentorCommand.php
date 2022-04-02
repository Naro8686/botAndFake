<?php

namespace App\Telegram\Commands\Admin;

use App\Models\Mentor;
use App\Telegram\Dialogs\AddMentorDialog;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Telegram\Bot\Actions;
use Throwable;


class MentorCommand extends BaseAdminCommand
{
    protected $name = 'mentor';
    protected $pattern = '{method}{mentor_id}';

    public function handle()
    {
        try {
            $args = $this->getArguments();
            $method = $args['method'] ?? null;
            if ($method === 'del') $method = 'delete';
            if (!is_null($method) && method_exists(self::class, $method)) $this->$method($args);
            else $this->triggerCommand('notfound');
        } catch (Throwable $exception) {
            Log::error("AddMentorCommand:{$exception->getMessage()}");
        }
        return false;
    }

    private function add($args)
    {
        $validator = Validator::make($args, [
            'mentor_id' => 'required|exists:telegram_users,id|unique:mentors,id',
        ], ['required' => "Поле :attribute обязательно для заполнения.\r\nПример: /{$this->getName()} add {mentor_id}"]);
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        if ($validator->fails()) return $this->replyWithMessage([
            "text" => makeText($validator->errors()->all()),
            "parse_mode" => "html",
        ]);
        $dialog = new AddMentorDialog($this->getUpdate(), $this->getUser());
        $dialog->setMemory(json_encode(['telegram_id' => $args['mentor_id']]));
        $this->dialogs()->add($dialog);
    }

    private function delete($args)
    {
        $validator = Validator::make($args, [
            'mentor_id' => 'required|exists:mentors,id',
        ], ['required' => "Поле :attribute обязательно для заполнения.\r\nПример: /{$this->getName()} delete {mentor_id}"]);
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        if ($validator->fails()) return $this->replyWithMessage([
            "text" => makeText($validator->errors()->all()),
            "parse_mode" => "html",
        ]);
        $mentor = Mentor::find($args['mentor_id']);
        $account = $mentor->account;
        if ($mentor->delete()) {
            $text = "✅ <b>Наставник удалён</b>";
            if ($account) {
                $admin = $this->getUser();
                $account->sendMessage([
                    'text' => "❌ <b>{$admin->accountLink()}</b> <b>Вас снял из списка наставников</b>",
                    "parse_mode" => "html",
                ]);
            }
        } else $text = "🤷🏻‍️ <i>Что То пошло не так</i>";
        $this->replyWithMessage([
            "text" => $text,
            "parse_mode" => "html",
        ]);
    }
}
