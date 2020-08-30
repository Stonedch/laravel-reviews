<?php

namespace App\Listeners\Auth;

use App\Events\Auth\UserRegistered;
use App\Mail\Auth\RegistrationEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class SendRegisterNotification {

    public function handle(UserRegistered $event) {
        // Mail::to($event->user->email)->send(new RegistrationEmail($event->user, $event->password));
        Mail::to('stch.max.muhin@gmail.com')->send(new RegistrationEmail($event->user, $event->password));
    }

}

