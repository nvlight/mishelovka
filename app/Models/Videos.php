<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Videos
 *
 * @property int $id
 * @property int $parent_id
 * @property string $src
 * @property string $filename
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\VideosFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Videos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Videos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Videos query()
 * @method static \Illuminate\Database\Eloquent\Builder|Videos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Videos whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Videos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Videos whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Videos whereSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Videos whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Videos whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Videos extends Model
{
    use HasFactory;
}
