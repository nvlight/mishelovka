<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Sketches
 *
 * @property int $id
 * @property int $garment_id
 * @property int $video_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SketchesFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Sketches newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sketches newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sketches query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sketches whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sketches whereGarmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sketches whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sketches whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sketches whereVideoId($value)
 * @mixin \Eloquent
 */
class Sketches extends Model
{
    use HasFactory;
}
