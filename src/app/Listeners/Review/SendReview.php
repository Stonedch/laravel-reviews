<?php

namespace App\Listeners\Review;

use App\Events\Review\ReviewStored;
use App\Mail\Review\ReviewEmail;
use Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use PDF;

class SendReview
{
    public function handle(ReviewStored $event)
    {
        $pdf = PDF::loadView('pdf.invoice', [
            'review' => $event->review,
            'product' => $event->product,
        ]);
        $message = new ReviewEmail();
        $message->attachdata($pdf->output(), 'review.pdf');

        Mail::to($event->user->email)
            ->send($message);
    }
}
