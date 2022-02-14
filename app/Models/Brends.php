<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Brends
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\BrendsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Brends newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brends newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brends query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brends whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brends whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brends whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brends whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Brends extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'title', 'created_at', 'updated_at'
    ];
}
