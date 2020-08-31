<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function index() {
        $products = Product::orderBy('id', 'desc')->take(3)->get();
        $context = ['products' => $products];

        return view('home', $context);
    }

}
