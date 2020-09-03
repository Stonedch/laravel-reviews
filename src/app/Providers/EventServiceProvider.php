<?php

namespace App\Providers;

use App\Events\Auth\UserRegistered;
use App\Events\Review\ReviewStored;
use App\Listeners\Auth\SendRegisterNotification;
use App\Listeners\Review\SendReview;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        UserRegistered::class => [
            SendRegisterNotification::class,
        ],
        ReviewStored::class => [
            SendReview::class,
        ],
    ];

    public function boot()
    {
        parent::boot();
    }
}
