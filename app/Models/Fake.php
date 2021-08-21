<?php

namespace App\Models;

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

    public function link()
    {
        return url('/');
    }
}
