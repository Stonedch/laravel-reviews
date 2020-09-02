<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review;
use App\Models\Status;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('site/product/index', [
            'products' => Product::orderBy('id', 'desc')->paginate(6),
        ]);
    }

    public function show($slug)
    {
        return view('site/product/detail', [
            'product' => Product::where('slug', '=', $slug)->firstOrFail(),
        ]);
    }
}
