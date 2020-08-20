<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller {

    public function getAll() {
        $products = Products::orderBy('id', 'desc')->paginate(6);
        $context = ['products' => $products];
        return view('products/all', $context);
    }

}