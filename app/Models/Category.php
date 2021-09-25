<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public $timestamps = false;
    public const OLX = 'olx';
    public const INPOST = 'inpost';
    public const DPD = 'dpd';
    public const POCZTA = 'poczta';
    public const VINTED = 'vinted';

    public function fakes()
    {
        return $this->hasMany(Fake::class);
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
            default:
                return olx_parse($url);
        }
    }
}
