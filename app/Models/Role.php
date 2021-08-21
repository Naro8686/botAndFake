<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TelegramUser[] $telegramUsers
 * @property-read int|null $telegram_users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 */
class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public $timestamps = false;
    public const ADMIN = 'admin';
    public const MODERATOR = 'moderator';
    public const WORKER = 'worker';

    public function isAdmin()
    {
        return $this->name === self::ADMIN;
    }

    public function telegramUsers()
    {
        return $this->hasMany(TelegramUser::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function getRoleName(): string
    {
        switch ($this->name) {
            case Role::ADMIN:
                $role = 'Администратор';
                break;
            case Role::MODERATOR:
                $role = 'Модератор';
                break;
            case Role::WORKER:
                $role = 'Воркер';
                break;
            default:
                $role = 'Неизвестен';
                break;
        }
        return $role;
    }

}
