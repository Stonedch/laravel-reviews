<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use App\Observers\ProductObserver;
use App\Observers\ReviewObserver;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Product::observe(ProductObserver::class);
        Review::observe(ReviewObserver::class);
        User::observe(UserObserver::class);
    }
}
