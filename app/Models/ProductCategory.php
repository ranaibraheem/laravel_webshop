<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProductCategory extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'user_id',
        'name',
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    
    protected $table = 'product_categories';

    protected $guarded = [
        'id',
    ];

}
