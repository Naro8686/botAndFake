<?php

namespace App\Telegram\Commands\Admin;

use App\Models\Category;
use App\Models\Country;
use App\Models\Setting;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Telegram\Bot\Actions;
use Throwable;


/**
 * Class HelpCommand.
 */
class AddSubDomainCommand extends BaseAdminCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'add';

    protected $pattern = '{short_country}?{prefix?}';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        try {
            $domain = config('app.domain', 'localhost');
            $subdomains = [];
            $short_country = $this->getArguments()['short_country'] ?? null;
            $prefix = $this->getArguments()['prefix'] ?? null;
            $locales = Country::get()->pluck(['locale'])->toArray();

            $prefix = is_null($prefix) && !is_null($short_country) && !in_array($short_country, $locales) ? $short_country : $prefix;
            $locale = !is_null($short_country) && in_array($short_country, $locales) ? $short_country : Country::locale(Country::POLAND);
            $country = Country::byLocale($locale)->first();

            $categories = Category::whereHas('country', function ($query) use ($country) {
                return $query->where('countries.name', $country->name ?? Country::POLAND);
            })->get();

            $this->replyWithChatAction(['action' => Actions::TYPING]);
            if (empty($categories)) $this->replyWithMessage([
                "text" => makeText([
                    "❗️ <b>Сервисов не существует!</b>"
                ]),
                "parse_mode" => "html",
            ]);
            else foreach ($categories as $key => $category) {
                $subdomain = trim("$category->name$prefix");
                $rules = ["{$category->name}_{$locale}" => config("setting_fields.subdomains.elements")[$key]['rules'] ?? 'required|min:1|max:50|regex:/^([a-z0-9][a-z0-9.\-,]+)$/i'];
                $validator = Validator::make(["{$category->name}_{$locale}" => $subdomain], $rules, [
                    "{$category->name}_{$locale}.regex" => "Неверный формат"
                ]);
                if ($validator->fails()) {
                    $this->replyWithMessage([
                        "text" => makeText($validator->errors()->all()),
                        "parse_mode" => "html",
                    ]);
                    break;
                } else if (Setting::add("{$category->name}_{$locale}", $subdomain, Setting::getDataType("{$category->name}_{$locale}"))) {
                    $subdomains[] = "👉🏻 <b>{$category->name}_{$locale}</b> ⇢ <code>$subdomain.$domain</code>";
                }
            }
            if (!empty($subdomains)) $this->replyWithMessage([
                "text" => "✅ <b>Поддомен успешно сохранен</b>\n\r\n\r" . makeText($subdomains),
                "parse_mode" => "html",
            ]);
        } catch (Throwable $exception) {
            Log::error("AddSubDomainCommand:{$exception->getMessage()}");
        }
    }
}
