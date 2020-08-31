<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Status;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductsController extends Controller {

    public function getAll() {
        $products = Product::orderBy('id', 'desc')->paginate(6);
        $context = ['products' => $products];

        return view('products/all', $context);
    }

    public function getDetail($slug) {
        $product = Product::where('slug', '=', $slug)->firstOrFail();
        $reviews = Review::where('products_id_foreign', '=', $product->id)->get();
        $status = Status::where('slug', '=', 'new')->get();

        $context = [
            'product' => $product,
            'reviews' => $reviews,
            'status' => $status,
        ];

        return view('products/detail', $context);
    }

}
