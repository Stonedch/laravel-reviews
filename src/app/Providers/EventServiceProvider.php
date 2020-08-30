<?php

namespace App\Providers;

use App\Events\Auth\UserRegistered;
use App\Listeners\Auth\SendRegisterNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider {

    protected $listen = [
        UserRegistered::class => [
            SendRegisterNotification::class,
        ],
    ];

    public function boot() {
        parent::boot();
    }

}

