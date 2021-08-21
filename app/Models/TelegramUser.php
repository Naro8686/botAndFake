<?php

namespace App\Models;

use App\Http\Controllers\Telegram\BotController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Collection;
use Log;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Objects\Message;

/**
 * App\Models\TelegramUser
 *
 * @property int $id
 * @property int $is_bot
 * @property int $has_ban
 * @property string|null $first_name
 * @property string|null $username
 * @property string|null $language_code
 * @property int|null $role_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Role|null $role
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|TelegramUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelegramUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelegramUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|TelegramUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelegramUser whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelegramUser whereHasBan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelegramUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelegramUser whereIsBot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelegramUser whereLanguageCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelegramUser whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelegramUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelegramUser whereUsername($value)
 * @mixin \Eloquent
 * @property object|null $details
 * @method static \Illuminate\Database\Eloquent\Builder|TelegramUser whereDetails($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Fake[] $fakes
 * @property-read int|null $fakes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|TelegramUser[] $referrals
 * @property-read int|null $referrals_count
 * @property-read \Illuminate\Database\Eloquent\Collection|TelegramUser[] $referrer
 * @property-read int|null $referrer_count
 * @property-read \App\Models\Request|null $request
 * @property int $visibly
 * @method static \Illuminate\Database\Eloquent\Builder|TelegramUser whereVisibly($value)
 */
class TelegramUser extends Model
{
    use HasFactory;

    public const DETAILS = '{"dialogs":null,"settings":[]}';

    protected $guarded = [];
    protected $casts = [
        'details' => 'array'
    ];
    protected $attributes = [
        'details' => self::DETAILS,
    ];


    /**
     * @return HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'telegram_id');
    }

    /**
     * @return HasMany
     */
    public function fakes(): HasMany
    {
        return $this->hasMany(Fake::class, 'telegram_id');
    }

    /**
     * @return BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function request()
    {
        return $this->hasOne(Request::class, 'telegram_id','id');
    }

    public function referrals()
    {
        return $this->belongsToMany(TelegramUser::class, Request::class, 'referrer_id', 'telegram_id');
    }

    public function referrer()
    {
        return $this->belongsToMany(TelegramUser::class, Request::class, 'telegram_id', 'referrer_id');
    }

    public function getName(): string
    {
        $name = $this->first_name ?? $this->username;
        return $this->visibly && !is_null($name) ? $name : "Без имени";
    }

    public function isActive(): bool
    {
        $approved = $this->request()->where('approved', true)->exists();
        return !is_null($this->role_id) && $approved;
    }

    public function banned(): bool
    {
        return (bool)$this->has_ban;
    }


    public function isAdmin(): bool
    {
        return (!is_null($this->role) && $this->role->name === Role::ADMIN);
    }

    public function getRoleName(): string
    {
        $role = $this->role;
        return !is_null($role) ? $role->getRoleName() : 'Неизвестен';
    }

    /**
     * @return Collection
     */
    public function info(): Collection
    {
        $name = $this->getName();
        $roleName = $this->getRoleName();
        $refCount = $this->referrals()->count();
        $referrer = $this->referrer()->first();
        $fakeCount = $this->fakes()->count();
        $invited = !is_null($referrer) ? $referrer->getName() : "Никто";
        $regDate = is_null($this->created_at) ? now()->diffForHumans() : $this->created_at->diffForHumans();
        return collect([
            'id' => $this->id,
            'name' => $name,
            'status' => $roleName,
            'refCount' => $refCount,
            'invited' => $invited,
            'fakeCount' => $fakeCount,
            'regDate' => $regDate,
        ]);
    }

    public function dialogExists(): bool
    {
        return $this->details && isset($this->details['dialogs']) && !is_null($this->details['dialogs']);
    }

    public function dialogSetField($field, $value): bool
    {
        if (is_null($this->details)) {
            $this->details = json_decode(self::DETAILS, true);
        }
        $details = $this->details;
        $details['dialogs'][$field] = $value;
        $this->details = $details;
        return $this->save();
    }

    /**
     * @param null $field
     * @return mixed|string|null
     */
    public function getDialog($field = null)
    {
        if (!$this->dialogExists()) return null;
        return is_null($field) ? $this->details['dialogs'] ?? [] : $this->details['dialogs'][$field] ?? '';
    }

    public function deleteDialog(): bool
    {
        if ($this->dialogExists()) {
            $details = $this->details;
            $details['dialogs'] = null;
            $this->details = $details;
            return $this->save();
        }
        return false;
    }


    /**
     * @param null $field
     * @return Collection|mixed|null
     */
    public function getSettings($field = null)
    {
        $settings = [];
        if ($this->details && isset($this->details['settings'])) {
            $settings = $this->details['settings'];
        }
        $settings = collect($settings);

        return is_null($field)
            ? $settings
            : ($settings->has($field)
                ? !is_array($settings[$field]) ? $settings[$field] : collect($settings[$field])
                : null);
    }

    public function setSettings($field, $value): bool
    {
        if (is_null($this->details)) {
            $this->details = json_decode(self::DETAILS, true);
        }
        $details = $this->details;

        $settings = collect($details['settings'] ?? []);

        $array = [];
        $fields = array_reverse(explode('.', $field));

        $count = count($fields);
        $i = $count - 1;
        foreach ($fields as $key) {
            $i++;
            $array = [$key => ($i === $count) ? $value : $array];
        }

        $settings = $settings->replaceRecursive($array);
        $details['settings'] = $settings->toArray();

        $this->details = $details;

        return $this->save();
    }

    /**
     * @param array $params
     * @return Message|null
     */
    public function sendMessage(array $params): ?Message
    {
        try {
            $params["chat_id"] = $params["chat_id"] ?? $this->id;
            return BotController::getTelegram()->sendMessage($params);
        } catch (TelegramSDKException $e) {
            Log::error($e->getMessage());
        }
        return null;
    }
}
