<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Fake[] $fakes
 * @property-read int|null $fakes_count
 * @property int|null $country_id
 * @property-read \App\Models\Country|null $country
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCountryId($value)
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'country_id'];
    public $timestamps = false;
    public const OLX = 'olx';
    public const INPOST = 'inpost';
    public const DPD = 'dpd';
    public const POCZTA = 'poczta';
    public const VINTED = 'vinted';
    public const ALLEGRO = 'allegrolokalnie';
    public const BAZOS = 'bazos';
    public const CBAZAR = 'cbazar';

    public function fakes()
    {
        return $this->hasMany(Fake::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return Collection
     */
    public function banks(): Collection
    {
        return collect(config('fakes.banks')[$this->country->name ?? Country::POLAND]);
    }

    /**
     * @param string $url
     * @return array
     */
    public function parse(string $url): array
    {
        switch ($this->name) {
            case self::VINTED:
                return vinted_parse($url);
            case self::ALLEGRO:
                return allegro_parse($url);
            case self::BAZOS:
                return bazos_parse($url);
            case self::CBAZAR:
                return cbazar_parse($url);
            default:
                return olx_parse($url);
        }
    }
}
