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
class AddSubDomainCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'add';

    protected $pattern = '{prefix}?';

    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $domain = config('app.domain', 'localhost');
        $subdomains = [];
        $prefix = $this->getArguments()['prefix'] ?? null;
        $categories = Category::get();
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        if (empty($categories)) $this->replyWithMessage([
            "text" => makeText([
                "❗️ <b>Сервисов не существует!</b>"
            ]),
            "parse_mode" => "html",
        ]);
        else foreach ($categories as $key => $category) {
            $subdomain = trim("$category->name$prefix");
            $rules = [$category->name => config("setting_fields.subdomains.elements")[$key]['rules'] ?? 'required|min:1|max:50|regex:/^([a-z0-9][a-z0-9.\-,]+)$/i'];
            $validator = Validator::make([$category->name => $subdomain], $rules, [
                "$category->name.regex" => "Неверный формат"
            ]);
            if ($validator->fails()) {
                $this->replyWithMessage([
                    "text" => makeText($validator->errors()->all()),
                    "parse_mode" => "html",
                ]);
                break;
            } else if (Setting::add($category->name, $subdomain, Setting::getDataType($category->name))) {
                $subdomains[] = "👉🏻 <b>$category->name</b> ⇢ <code>$subdomain.$domain</code>";
            }
        }
        if (!empty($subdomains)) $this->replyWithMessage([
            "text" => "✅ <b>Поддомен успешно сохранен</b>\n\r\n\r" . makeText($subdomains),
            "parse_mode" => "html",
        ]);
    }
}