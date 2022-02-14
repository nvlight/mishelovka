<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Countries
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CountriesFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Countries newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Countries newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Countries query()
 * @method static \Illuminate\Database\Eloquent\Builder|Countries whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Countries whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Countries whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Countries whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Countries extends Model
{
    use HasFactory;
}
