<?php

namespace App\Observers;

use App\Models\Review;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;

class ReviewObserver
{
    public function saving(Review $review)
    {
        $review->user_id =
           $review->user_id ?? Auth::id();
        $review->status_id =
            Status::where('slug', '=', 'new')->firstOrFail()->id;
    }
}
