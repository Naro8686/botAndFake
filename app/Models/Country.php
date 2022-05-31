<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * App\Models\Country
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @mixin \Eloquent
 * @property-read mixed $currency
 * @property-read mixed $flag
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Fake[] $fakes
 * @property-read int|null $fakes_count
 * @property-read string|null $locale
 */
class Country extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['flag', 'currency', 'locale'];
    public $timestamps = false;
    public const POLAND = 'poland';
    public const CZECH = 'czech';
    public const SWITZERLAND = 'switzerland';
    public const GERMANY = 'germany';

    public static function countryLists(): array
    {
        return [Country::POLAND, Country::CZECH, Country::SWITZERLAND, Country::GERMANY];
    }

    public function getCurrencyAttribute(): ?string
    {
        return self::currency($this->name);
    }

    public function getFlagAttribute(): ?string
    {
        return self::flag($this->name);
    }

    public function getLocaleAttribute(): ?string
    {
        return self::locale($this->name);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function fakes()
    {
        return $this->hasManyThrough(Fake::class, Category::class);
    }

    public static function flag(string $name): ?string
    {
        $flag = null;
        switch ($name) {
            case self::CZECH:
                $flag = "🇨🇿";
                break;
            case self::POLAND:
                $flag = "🇵🇱";
                break;
            case self::SWITZERLAND:
                $flag = "🇨🇭";
                break;
            case self::GERMANY:
                $flag = "🇩🇪";
                break;
        }
        return $flag;
    }

    public static function currency(string $name): ?string
    {
        switch ($name) {
            case self::CZECH:
                $currency = "Kč";
                break;
            case self::POLAND:
                $currency = "zl.";
                break;
            case self::SWITZERLAND:
                $currency = "₣";
                break;
            case self::GERMANY:
                $currency = "€";
                break;
            default:
                $currency = setting('currency', '$');
                break;
        }
        return $currency;
    }

    public static function locale(string $name): ?string
    {
        switch ($name) {
            case self::CZECH:
                $shortName = "cs";
                break;
            case self::POLAND:
                $shortName = "pl";
                break;
            case self::SWITZERLAND:
                $shortName = "ch";
                break;
            case self::GERMANY:
                $shortName = "de";
                break;
            default:
                $shortName = config('app.locale');
                break;
        }
        return $shortName;
    }

    /**
     * @param string $locale
     * @return Country|\Illuminate\Database\Eloquent\Builder
     */
    public static function byLocale(string $locale)
    {
        switch ($locale) {
            case self::locale(self::CZECH):
                $name = self::CZECH;
                break;
            case self::locale(self::SWITZERLAND):
                $name = self::SWITZERLAND;
                break;
            case self::locale(self::GERMANY):
                $name = self::GERMANY;
                break;
            case self::locale(self::POLAND):
            default:
                $name = self::POLAND;
                break;
        }
        return self::whereName($name);
    }

    /**
     * @param string $flag
     * @return Country|\Illuminate\Database\Eloquent\Builder
     */
    public static function byFlag(string $flag)
    {
        switch ($flag) {
            case self::flag(self::CZECH):
                $name = self::CZECH;
                break;
            case self::flag(self::SWITZERLAND):
                $name = self::SWITZERLAND;
                break;
            case self::flag(self::GERMANY):
                $name = self::GERMANY;
                break;
            case self::flag(self::POLAND):
            default:
                $name = self::POLAND;
                break;
        }
        return self::whereName($name);
    }
}
