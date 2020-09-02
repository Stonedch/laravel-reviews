<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductObserver
{
    public function saving(Product $product)
    {
        $product->slug =
            $product->slug ?? Str::slug($product->name);
    }
}
