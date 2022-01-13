<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Sendgrid
 *
 * @property int $id
 * @property string $token
 * @property string $domain
 * @method static \Illuminate\Database\Eloquent\Builder|Sendgrid newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sendgrid newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sendgrid query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sendgrid whereDomain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sendgrid whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sendgrid whereToken($value)
 * @mixin \Eloquent
 */
class Sendgrid extends Model
{
    use HasFactory;

    protected $fillable = ['token', 'domain'];
    public $timestamps = false;
}
