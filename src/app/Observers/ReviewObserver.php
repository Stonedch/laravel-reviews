<?php

namespace App\Observers;

use App\Models\Review;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;

class ReviewObserver
{
    public function saving(Review $review)
    {
        $review->users_id_foreign =
           $review->users_id_foreign ?? Auth::id();
        $review->statuses_id_foreign =
            $review->statuses_id_foreign ?? Status::where('slug', '=', 'new')->firstOrFail()->id;
    }
}
