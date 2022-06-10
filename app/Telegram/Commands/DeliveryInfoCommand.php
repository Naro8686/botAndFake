<?php

namespace App\Telegram\Commands;

use App\Models\Category;
use App\Models\Country;
use Telegram\Bot\Actions;

class DeliveryInfoCommand extends BaseCommand
{
    /**
     * @var string Command Name
     */
    protected $name = 'deliveryInfo';

    /**
     * @var string Command Description
     */
    protected $description = 'информации о доставке';


    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->getUser()->deleteDialog();
        $text = [];
        $url1 = $this->url(Category::ZASILKOVNA, Country::locale(Country::CZECH), Category::ZASILKOVNA . '/cz/info');
        $url2 = $this->url(Category::BAZOS, Country::locale(Country::CZECH), Category::BAZOS . '/cz/info');
        $url3 = $this->url(Category::PPL, Country::locale(Country::CZECH), Category::PPL . '/cz/info');
        $text[] = "🚥 <b>Чехия ZASILKOVNA 2.0</b> - <a href='$url1'>$url1</a>";
        $text[] = "🚥 <b>Чехия BAZOS 2.0</b> - <a href='$url2'>$url2</a>";
        $text[] = "🚥 <b>Чехия PPL 2.0</b> - <a href='$url3'>$url3</a>";
        //disable
        $text = ['Временно отключено'];
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $this->replyWithMessage([
            "text" => makeText($text),
            "parse_mode" => "html",
            "disable_web_page_preview" => true,
        ]);
    }

    public function url($service, $locale, $path = ''): string
    {
        $protocol = 'https';
        $domain = config('app.domain');
        $subdomain = collect(explode(',', setting("{$service}_{$locale}", $service)))->first();
        $url = "$protocol://$subdomain.$domain";
        $path = trim($path, '/');

        if (!empty($path)) $url = "$url/$path";
        return $url;
    }
}
