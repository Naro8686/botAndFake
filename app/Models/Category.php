<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Throwable;

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
    public const ALLEGROLOKALNIE = 'allegrolokalnie';
    public const BAZOS = 'bazos';
    public const CBAZAR = 'cbazar';
    public const SBAZAR = 'sbazar';
    public const POSTAONLINE = 'postaonline';
    public const PPL = 'ppl';
    public const ZASILKOVNA = 'zasilkovna';
    public const ANIBIS = 'anibis';
    public const POST = 'post';
    public const TUTTI = 'tutti';

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
        $data = ['price' => null, 'title' => null, 'img' => null];
        try {
            $pars_method = "{$this->name}_parse";
            if (function_exists($pars_method)) $data = $pars_method($url);
        } catch (Throwable $exception) {
            Log::error("Category:parse {$exception->getMessage()}");
        }
        return $data;
    }
}
