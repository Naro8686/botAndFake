<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Request
 *
 * @property int $id
 * @property int $telegram_id
 * @property int|null $referrer_id
 * @property int|null $replied_id
 * @property string $learn
 * @property string|null $practice
 * @property int|null $approved
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TelegramUser|null $replied
 * @property-read \App\Models\TelegramUser $telegramUser
 * @method static \Illuminate\Database\Eloquent\Builder|Request newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Request newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Request query()
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereLearn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request wherePractice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereReferrerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereRepliedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereTelegramId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Request extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function telegramUser()
    {
        return $this->belongsTo(TelegramUser::class, 'telegram_id');
    }

    public function replied()
    {
        return $this->belongsTo(TelegramUser::class, 'replied_id');
    }
}
