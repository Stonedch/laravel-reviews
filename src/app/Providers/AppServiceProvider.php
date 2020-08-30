<?php

namespace App\Providers;

use App\Models\Products;
use App\Observers\ProductsObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    public function boot() {
        Products::observe(ProductsObserver::class);
    }

}

