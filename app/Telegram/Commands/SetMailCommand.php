<?php

namespace App\Telegram\Commands;

use App\Models\Category;
use App\Models\Role;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;
use Telegram\Bot\Actions;


/**
 * Class HelpCommand.
 */
class SetMailCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'setmail';

    protected $pattern = '{prefix}';

    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $emails = [];
        $prefix = $this->getArguments()['prefix'] ?? null;
        if (is_null($prefix)) {
            $this->replyWithMessage([
                "text" => makeText([
                    "❗️ <b>Укажите префикс!</b>"
                ]),
                "parse_mode" => "html",
            ]);
            return false;
        }
        $categories = Category::get();
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        if (empty($categories)) $this->replyWithMessage([
            "text" => makeText([
                "❗️ <b>Сервисов не существует!</b>"
            ]),
            "parse_mode" => "html",
        ]);
        else foreach ($categories as $key => $category) {
            $email = trim("$category->name@$prefix");
            $field = "{$category->name}_email";
            $rules = [$field => config("setting_fields.email.elements")[$key]['rules'] ?? 'required|email'];
            $validator = Validator::make([$field => $email], $rules, [
                "$field.email" => "Неверный формат"
            ]);
            if ($validator->fails()) {
                $this->replyWithMessage([
                    "text" => makeText($validator->errors()->all()),
                    "parse_mode" => "html",
                ]);
                break;
            } else if (Setting::add($field, $email, Setting::getDataType($field))) {
                $emails[] = "👉🏻 <b>$category->name</b> ⇢ <code>$email</code>";
            }
        }
        if (!empty($emails)) $this->replyWithMessage([
            "text" => "✅ <b>Е-майл успешно сохранен</b>\n\r\n\r" . makeText($emails),
            "parse_mode" => "html",
        ]);
    }
}