<?php

namespace App\Providers;

use App\Models\Product;
use App\Observers\ProductsObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    public function boot() {
        Product::observe(ProductsObserver::class);
    }

}

