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
        return $this->hasMany(Review::class);
    }

    public function reviewsUnRejected()
    {
        return $this->reviews()
                    ->where('statuses_id_foreign', '<>', Status::whereSlug('rejected')->id);
    }
}
