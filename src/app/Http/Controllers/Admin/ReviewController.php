<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Product;
use App\Models\User;
use App\Models\Review;
use App\Models\Status;
use Illuminate\Http\Request;
use Log;

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

        Log::debug('Review [id: '.$review->id.'] successfully stored');

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

        Log::debug('Review [id: '.$review->id.'] successfully updated');

        return redirect()->route('admin.review.show', $review->id)
                         ->with('success', 'Review updated');
    }

    public function destroy($id)
    {
        Review::find($id)->delete();

        Log::debug('Review [id: '.$id.'] successfully destroyed');

        return redirect()->route('admin.review.index')
                         ->with('success', 'Review destroyed');
    }
}
