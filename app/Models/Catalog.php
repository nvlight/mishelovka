<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    protected $fillable = [
     'type', 'color', 'img', 'caption', 'img_filename', 'parent_id', 'size', 'price'
    ];
}
