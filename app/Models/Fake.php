<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 */
class Fake extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function telegramUser()
    {
        return $this->belongsTo(TelegramUser::class, 'telegram_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function takeUsers()
    {
        return $this->belongsToMany(TelegramUser::class, 'takes', 'fake_id', 'telegram_id');
    }

    public function allTakeUsers(): Collection
    {
        return $this->takeUsers->merge([$this->telegramUser]);
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
            default:
                $url = "https://www.google.com";
                break;
        }
        return $url;
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
        $subdomain = collect(explode(',', setting($this->category->name, $this->category->name)))->first();
        $url = "$protocol://$subdomain.$domain";
        $path = trim($path, '/');
        $query = http_build_query($parameters);
        if (!empty($path)) $url = "$url/$path";
        if (!empty($parameters)) $url = "$url?$query";

        return $url;
    }

    /**
     * @param false $secure
     * @return string
     */
    public function link(bool $secure = false): string
    {
        return $this->url('/', ['track_id' => $this->track_id], $secure);
    }

    public function adminChatLink(bool $secure = false): string
    {
        return $this->url('/', ['track_id' => $this->track_id, 'from' => 'admin'], $secure);
    }

    public function price(): string
    {
        return $this->price . ' ' . setting('currency');
    }

    public function logo(bool $secure = false): string
    {
        $logo = asset('images/inpost_logo.svg',$secure);
        switch ($this->category->name) {
            case Category::OLX:
                $logo = asset('images/olx_logo.png',$secure);
                break;
            case Category::INPOST:
                $logo = asset('images/inpost_logo.svg',$secure);
                break;
            case Category::DPD:
                $logo = asset('images/dpd_logo.svg',$secure);
                break;
            case Category::POCZTA:
                $logo = asset('images/poczta_logo.png',$secure);
                break;
            case Category::VINTED:
                $logo = asset('images/vinted_logo.png',$secure);
                break;
        }
        return $logo;
    }

    public function getTrackIdFromWorker(): string
    {
        return getTrackIdFromWorker($this->track_id);
    }
}
