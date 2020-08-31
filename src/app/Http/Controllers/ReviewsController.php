<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Status;
use App\Models\Product;
use App\Http\Requests\ReviewsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller {

    public function createSubmit(ReviewsRequest $request) {
        $product_id = $request->input('products_id_foreign');
        $product = Product::find($product_id);
        $status = Status::where('slug', '=', 'new')->firstOrFail();
        $review = new Review;

        if (Auth::user()) {
            $review->users_id_foreign = Auth::user()->id;
        } else {
            $review->users_id_foreign = $request->input('users_id_foreign');
        }
        $review->products_id_foreign = $product->id;
        $review->statuses_id_foreign = $status->id;
        $review->name = $request->input('name');
        $review->score = $request->input('score');
        $review->positive = $request->input('positive');
        $review->negative = $request->input('negative');

        $review->save();

        return redirect()->route('products-detail', $product->slug)->with('success', 'Отзыв был добавлен.');
    }

}
