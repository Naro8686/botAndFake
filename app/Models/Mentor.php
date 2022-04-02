<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Mentor
 *
 * @property int|null $id
 * @property int|null $user_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TelegramUser|null $tgUser
 * @property-read \App\Models\TelegramUser|null $tgUserChild
 * @method static \Illuminate\Database\Eloquent\Builder|Mentor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mentor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mentor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mentor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mentor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mentor whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mentor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mentor whereUserId($value)
 * @mixin \Eloquent
 * @property string|null $description
 * @property-read \App\Models\TelegramUser $account
 * @method static \Illuminate\Database\Eloquent\Builder|Mentor whereDescription($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TelegramUser[] $users
 * @property-read int|null $users_count
 */
class Mentor extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TelegramUser::class, 'id');
    }

    public function users()
    {
        return $this
            ->belongsToMany(TelegramUser::class, 'mentor_users')
            ->withPivot(['status', 'experience']);
    }
}
