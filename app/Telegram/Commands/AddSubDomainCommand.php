<?php

namespace App\Telegram\Commands;

use App\Models\Category;
use App\Models\Role;
use App\Models\Setting;
use App\Telegram\Dialogs\AlertDialog;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Telegram\Bot\Actions;


/**
 * Class HelpCommand.
 */
class AddSubDomainCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'addSubDomain';

    protected $pattern = '{name}{subdomain}';

    protected $permissionName = Role::ADMIN;

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $name = $this->getArguments()['name'];
        $subdomain = $this->getArguments()['subdomain'];
        $category = Category::whereName($name)->first();
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        if (is_null($category)) {
            $categoryNames = Category::get()->pluck(['name'])->map(function ($name) {
                return $name;
            });
            $this->replyWithMessage([
                "text" => makeText([
                    "❗️ <b>Сервис не существует!</b>",
                    "",
                    "<i>Выберите из этих сервисов</i> <b>{$categoryNames->implode('/')}</b>",
                    "<i>Пример: /$this->name $categoryNames[0] $categoryNames[0].pl</i>",
                ]),
                "parse_mode" => "html",
            ]);
        } else {
            $rules = [$category->name => config("setting_fields.subdomains.elements")[0]['rules'] ?? 'required|min:1|max:50|regex:/^([a-zA-Z0-9][a-zA-Z0-9.\-,]+)$/i'];
            $validator = Validator::make([$category->name => $subdomain], $rules);
            if ($validator->fails()) {
                $this->replyWithMessage([
                    "text" => makeText($validator->errors()->all()),
                    "parse_mode" => "html",
                ]);
            } else {
                $arr = explode(',', Setting::get($name, $category->name));
                if (!in_array($subdomain, $arr)) $arr[] = $subdomain;
                Setting::add($name, implode(',', $arr), Setting::getDataType($name));
                $this->replyWithMessage([
                    "text" => "✅ <b>Поддомен успешно сохранен</b>",
                    "parse_mode" => "html",
                ]);
            }
        }

    }
}