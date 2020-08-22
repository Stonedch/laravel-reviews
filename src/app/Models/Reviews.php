<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model {

    public $table = 'reviews';
    public $timestamps = false;

    public function setCreatedAtAttribute($value) { 
        $this->attributes['posted_at'] = \Carbon\Carbon::now(); 
    }

}
