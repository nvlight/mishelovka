<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Images
 *
 * @property int $id
 * @property int $parent_id
 * @property string $src
 * @property string $filename
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ImagesFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Images newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Images newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Images query()
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Images extends Model
{
    use HasFactory;
}
