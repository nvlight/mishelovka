<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Thumbnails
 *
 * @property int $id
 * @property int $garment_id
 * @property int $img_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ThumbnailsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnails query()
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnails whereGarmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnails whereImgId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thumbnails whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Thumbnails extends Model
{
    use HasFactory;
}
