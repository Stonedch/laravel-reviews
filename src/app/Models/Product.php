<?php

namespace App\Models;

use App\Models\Review;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'products_id_foreign');
    }
}
