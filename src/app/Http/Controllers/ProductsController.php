<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Statuses;
use App\Models\Users;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ProductsController extends Controller {

    public function getAll() {
        $products = Products::orderBy('id', 'desc')->paginate(6);
        $context = ['products' => $products];

        return view('products/all', $context);
    }

    public function getDetail($slug) {
        $product = Products::where('slug', '=', $slug)->firstOrFail();
        $reviews = Reviews::where('products_id_foreign', '=', $product->id)->get();
        $status = Statuses::where('slug', '=', 'new')->get();

        $context = [
            'product' => $product,
            'reviews' => $reviews,
            'status' => $status,
        ];

        return view('products/detail', $context);
    }

}
