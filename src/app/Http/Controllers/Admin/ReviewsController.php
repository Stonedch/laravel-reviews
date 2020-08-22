<?php

namespace App\Http\Controllers\Admin;

use App\Models\Users;
use App\Models\Products;
use App\Models\Statuses;
use App\Models\Reviews;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewsRequest;
use Illuminate\Http\Request;

class ReviewsController extends Controller {

    public function getAll() {
        $reviews = Reviews::all();
        $context = ['reviews' => $reviews];

        return view('admin/review/all', $context);
    }

    public function getDetail($id) {
        $review = Reviews::find($id);
        $context = ['review' => $review];

        return view('admin/review/detail', $context);
    }

    public function create() {
        $context = [
            'users' => Users::all(),
            'products' => Products::all(),
            'statuses' => Statuses::all(),
        ];

        return view('admin/review/create', $context);
    }

    public function createSubmit(ReviewsRequest $request) {
        $review = new Reviews;

        $review->users_id_foreign = $request->input('users_id_foreign');
        $review->products_id_foreign = $request->input('products_id_foreign');
        $review->statuses_id_foreign = $request->input('statuses_id_foreign');
        $review->name = $request->input('name');
        $review->score = $request->input('score');
        $review->positive = $request->input('positive');
        $review->negative = $request->input('negative');

        $review->save();

        return redirect()->route('admin-review-detail', $review->id)->with('success', 'Отзыв был добавлен.');
    }

    public function update($id) {
        $review = Reviews::find($id);
        $context = [
            'review' => $review,
            'users' => Users::all(),
            'products' => Products::all(),
            'statuses' => Statuses::all(),
        ];

        return view('admin/review/update', $context);
    }

    public function updateSubmit($id, ReviewsRequest $request) {
        $review = Reviews::find($id);

        $review->users_id_foreign = $request->input('users_id_foreign');
        $review->products_id_foreign = $request->input('products_id_foreign');
        $review->statuses_id_foreign = $request->input('statuses_id_foreign');
        $review->name = $request->input('name');
        $review->score = $request->input('score');
        $review->positive = $request->input('positive');
        $review->negative = $request->input('negative');

        $review->update();

        return redirect()->route('admin-review-detail', $review->id)->with('success', 'Отзыв был обновлен.');
    }

    public function delete($id) {
        $review = Reviews::find($id);
        $review->delete();

        return redirect()->route('admin-review-all')->with('success', 'Отзыв был удален.');
    }

}
