<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',
        'color_bg',
        'color_fg',
    ];

    public function reviews()
    {
        return $this->hasMany(Product::class, 'statuses_id_foreign');
    }
}
