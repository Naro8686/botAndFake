<?php

namespace App\Models;

use App\Casts\Json;
use App\Constants\Status;
use App\Http\Controllers\Telegram\BotController;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Str;
use Telegram\Bot\Exceptions\TelegramSDKException;
use Telegram\Bot\Objects\Message;
use Throwable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\TelegramUser
 *
 * @property int $id
 * @property string|null $api_token
 * @property int $is_bot
 * @property int $has_ban
 * @property bool $visibly
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $username
 * @property string|null $language_code
 * @property int|null $role_id
 * @property mixed|null $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Fake[] $fakes
 * @property-read int|null $fakes_count
 * @property-read \App\Models\Mentor|null $mentor
 * @property-read \Illuminate\Database\Eloquent\Collection|TelegramUser[] $referrals
 * @property-read int|null $referrals_count
 * @property-read \Illuminate\Database\Eloquent\Collection|TelegramUser[] $referrer
 * @property-read int|null $referrer_count
 * @property-read \App\Models\Request|null $request
 * @property-read \App\Models\Role|null $role
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Fake[] $takeFakes
 * @property-read int|null $take_fakes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \App\Models\User|null $user
 * @method static Builder|TelegramUser newModelQuery()
 * @method static Builder|TelegramUser newQuery()
 * @method static Builder|TelegramUser query()
 * @method static Builder|TelegramUser whereApiToken($value)
 * @method static Builder|TelegramUser whereCreatedAt($value)
 * @method static Builder|TelegramUser whereDetails($value)
 * @method static Builder|TelegramUser whereFirstName($value)
 * @method static Builder|TelegramUser whereHasBan($value)
 * @method static Builder|TelegramUser whereId($value)
 * @method static Builder|TelegramUser whereIsBot($value)
 * @method static Builder|TelegramUser whereLanguageCode($value)
 * @method static Builder|TelegramUser whereLastName($value)
 * @method static Builder|TelegramUser whereRoleId($value)
 * @method static Builder|TelegramUser whereUpdatedAt($value)
 * @method static Builder|TelegramUser whereUsername($value)
 * @method static Builder|TelegramUser whereVisibly($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Mentor[] $mentors
 * @property-read int|null $mentors_count
 */
class TelegramUser extends Authenticatable
{
    use HasApiTokens, HasFactory;

    public const DETAILS = '{"dialogs":null,"settings":[]}';
    protected $guarded = [];
    protected $casts = [
        'details' => Json::class,
        'visibly' => 'boolean',
    ];
    protected $attributes = [
        'details' => self::DETAILS,
    ];

    /**
     * @return string
     */
    public function cacheKey(): string
    {
        return sprintf(
            "%s/%s-%s",
            $this->getTable(),
            $this->getKey(),
            $this->updated_at->timestamp
        );
    }

    /**
     * @param $id
     * @param array $params
     * @return TelegramUser|null
     * @throws Throwable
     */
    public static function getUser($id, array $params = []): ?TelegramUser
    {
        $user = null;
        try {
            $user = self::whereId($id)->first();
            if (is_null($user)) {
                DB::beginTransaction();
                $user = self::create($params);
                DB::commit();
            }

            if (!empty($params)) {
                if (isset($params['username'])) $user->username = $params['username'];
                if (isset($params['first_name'])) $user->first_name = $params['first_name'];
                if (isset($params['last_name'])) $user->last_name = $params['last_name'];
                if (isset($params['is_bot'])) $user->is_bot = (int)$params['is_bot'];
                if (isset($params['language_code'])) $user->language_code = $params['language_code'];
                if ($user->isDirty()) $user->save();
            }
//            $user->tokens()->where('personal_access_tokens.name', 'telegram')->delete();
//            $token = $user->createToken('telegram')->plainTextToken;
//            Auth::guard('telegram')->attempt([
//                'id' => $user->id,
//                'token' => $token
//            ]);
        } catch (Throwable $e) {
            while (DB::transactionLevel() > 0) DB::rollBack();
            Log::error("TelegramUser::getUser {$e->getMessage()}");
        }
        return $user;
    }

    /**
     * @return HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'telegram_id','id');
    }

    public function mentors(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this
            ->belongsToMany(Mentor::class, 'mentor_users', 'telegram_user_id', 'mentor_id')
            ->withPivot(['status', 'experience']);
    }

    /**
     * @return Mentor|null
     */
    public function mentor(): ?Mentor
    {
        return $this->mentors()
            ->wherePivot('status', Status::ACCEPT)
            ->with(['account'])
            ->first();
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
        return $this->hasOne(Request::class, 'telegram_id', 'id');
    }

    public function referrals()
    {
        return $this->belongsToMany(TelegramUser::class, Request::class, 'referrer_id', 'telegram_id');
    }

    public function referrer()
    {
        return $this->belongsToMany(TelegramUser::class, Request::class, 'telegram_id', 'referrer_id');
    }

    public function takeFakes()
    {
        return $this->belongsToMany(Fake::class, 'takes', 'telegram_id', 'fake_id');
    }

    /**
     * @param bool|null $visibly
     * @return string
     */
    public function getName(bool $visibly = null): string
    {
        $visibly = is_null($visibly) ? $this->visibly : $visibly;
        $name = $this->first_name ?? $this->username;
        return $visibly && !is_null($name) ? $name : "Без имени";
    }

    public function accountLinkVisibly(bool $showID = false, $id = null, $name = null): string
    {
        $username = $this->username;
        $name = is_null($name) && $username ? "@$username" : $name;
        return $this->accountLink(true, $showID, $id, $name);
    }

    /**
     * @param bool|null $visibly
     * @param bool $showID
     * @param null $id
     * @param null $name
     * @return string
     */
    public function accountLink(bool $visibly = null, bool $showID = false, $id = null, $name = null): string
    {
        $id = is_null($id) ? $this->id : $id;
        $name = is_null($name) ? $this->getName($visibly) : $name;
        $showID = $showID ? '[<code>' . $id . '</code>]' : '';
        $visibly = is_null($visibly) ? $this->visibly : $visibly;
        return $visibly
            ? trim('<a href="tg://user?id=' . $id . '">' . $name . '</a>' . ' ' . $showID)
            : trim($name . ' ' . $showID);
    }

    public function isActive(): bool
    {
        $approved = $this->request()->where('approved', true)->exists();
        return !is_null($this->role_id) && $approved;
    }

    public function isMentor(): bool
    {
        return Mentor::whereId($this->id)->exists();
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
            'nickname' => $this->accountLinkVisibly(),
        ]);
    }

    public function dialogExists(): bool
    {
        return $this->details && isset($this->details['dialogs']) && !is_null($this->details['dialogs']);
    }

    public function dialogSetField($field, $value): bool
    {
        if (is_null($this->details)) {
            $this->details = json_decode(self::DETAILS, true, 512, JSON_UNESCAPED_UNICODE);
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
        try {
            if ($this->dialogExists()) {
                $details = $this->details;
                $details['dialogs'] = null;
                $this->details = $details;
                return $this->save();
            }
        } catch (Throwable $exception) {
            Log::error($exception->getMessage());
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
            $this->details = json_decode(self::DETAILS, true, 512, JSON_UNESCAPED_UNICODE);
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
        } catch (TelegramSDKException|Exception|Throwable $e) {
            $errorMsg = $e->getMessage();
            if ($e instanceof TelegramSDKException) {
                $blocked = false;
                if ($e->getCode() === 403) {
                    $blocked = true;
                } elseif ($e->getCode() === 400) {
                    if (str_contains($errorMsg, 'chat not found')) {
                        $blocked = true;
                    } elseif (str_contains($errorMsg, 'PEER_ID_INVALID')) {
                        $blocked = true;
                    } elseif (str_contains($errorMsg, 'chat with user not found')) {
                        $blocked = true;
                    } elseif (str_contains(Str::lower($errorMsg), 'forbidden')) {
                        $blocked = true;
                    }
                }
                if (!$blocked) {
                    Log::error("TelegramUser($this->id)::sendMessage $errorMsg");
                }
            }
        }
        return null;
    }

    public function personalToken($token)
    {
        [$id, $token] = explode('|', $token, 2);

        if ($instance = $this->tokens()->find($id)) {
            return hash_equals($instance->token, hash('sha256', $token)) ? $instance : null;
        }
        return null;
    }
}
