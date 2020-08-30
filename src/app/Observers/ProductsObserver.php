<?php

namespace App\Observers;

use App\Models\Products;
use Illuminate\Support\Str;

class ProductsObserver {

    public function saving(Products $product) {
        $product->slug = Str::slug($product->name);
    }

}

