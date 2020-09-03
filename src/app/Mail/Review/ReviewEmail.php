<?php

namespace App\Mail\Review;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReviewEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->markdown('email.review.review')
                    ->subject(config('app.name').': Review')
                    ->from(config('mail.from.address'));
    }
}
