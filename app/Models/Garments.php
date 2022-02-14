<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Garments
 *
 * @property int $id
 * @property int $age_type
 * @property int $age_first
 * @property int $age_second
 * @property int $country_id
 * @property int $brend_id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\GarmentsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Garments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Garments newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Garments query()
 * @method static \Illuminate\Database\Eloquent\Builder|Garments whereAgeFirst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Garments whereAgeSecond($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Garments whereAgeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Garments whereBrendId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Garments whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Garments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Garments whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Garments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Garments whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Garments whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Garments extends Model
{
    use HasFactory;
}
