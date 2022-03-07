<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductHasCategory extends Model
{
    use HasFactory;

    protected $table = 'product_has_Categories';

    protected $guarded = [
        'id',
    ];

}
