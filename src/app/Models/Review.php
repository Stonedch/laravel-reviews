<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'products_id_foreign',
        'statuses_id_foreign',
        'score',
        'name',
        'positive',
        'negative',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id_foreign');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id_foreign');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'statuses_id_foreign');
    }
}
