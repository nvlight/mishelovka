<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Catalog
 *
 * @property int $id
 * @property int $type
 * @property string|null $img_filename
 * @property string|null $img
 * @property string $caption
 * @property string|null $color
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $parent_id
 * @property string $size
 * @property int $price
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereImgFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Catalog extends Model
{
    use HasFactory;

    protected $fillable = [
     'type', 'color', 'img', 'caption', 'img_filename', 'parent_id', 'size', 'price'
    ];
}
