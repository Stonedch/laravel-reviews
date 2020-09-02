<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Product;
use App\Models\User;
use App\Models\Review;
use App\Models\Status;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return view('admin/review/index', [
            'reviews' => Review::all(),
        ]);
    }

    public function show($id)
    {
        return view('admin/review/detail', [
            'review' => Review::find($id),
        ]);
    }

    public function create()
    {
        return view('admin/review/create', [
            'users' => User::all(),
            'products' => Product::all(),
            'statuses' => Status::all(),
        ]);
    }

    public function store(ReviewRequest $request)
    {
        $review = new Review;
        $review->fill($request->validated());
        $review->save();

        return redirect()->route('admin.review.show', $review->id)
                         ->with('success', 'Review stored');
    }

    public function edit($id)
    {
        return view('admin/review/update', [
            'review' => Review::find($id),
            'users' => User::all(),
            'products' => Product::all(),
            'statuses' => Status::all(),
        ]);
    }

    public function update($id, ReviewRequest $request)
    {
        $review = Review::find($id);
        $review->update($request->validated());

        return redirect()->route('admin.review.show', $review->id)
                         ->with('success', 'Review updated');
    }

    public function destroy($id)
    {
        Review::find($id)->delete();

        return redirect()->route('admin.review.index')
                         ->with('success', 'Review destroyed');
    }
}
