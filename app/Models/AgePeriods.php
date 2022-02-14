<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AgePeriods
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\AgePeriodsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|AgePeriods newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AgePeriods newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AgePeriods query()
 * @method static \Illuminate\Database\Eloquent\Builder|AgePeriods whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgePeriods whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgePeriods whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgePeriods whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AgePeriods extends Model
{
    use HasFactory;
}
