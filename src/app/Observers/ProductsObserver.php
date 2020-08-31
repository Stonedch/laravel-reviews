<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductsObserver {

    public function saving(Product $product) {
        $product->slug = Str::slug($product->name);
    }

}

