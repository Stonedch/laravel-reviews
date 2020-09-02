<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(ReviewRequest $request)
    {
        $review = new Review;
        $review->fill($request->validated());
        $review->save();

        return redirect()->route('site.product.show', $review->product->slug)
                         ->with('success', 'Review stored');
    }
}
