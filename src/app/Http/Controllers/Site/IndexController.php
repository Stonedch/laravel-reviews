<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Log;

class IndexController extends Controller
{
    public function index()
    {
        return view('site/index', [
            'products' => Product::orderBy('id', 'desc')->take(3)->get(),
        ]);
    }
}
