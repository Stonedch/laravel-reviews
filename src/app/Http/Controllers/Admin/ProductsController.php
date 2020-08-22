<?php

namespace App\Http\Controllers\Admin;

use App\Models\Products;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductsRequest;
use Illuminate\Http\Request;

class ProductsController extends Controller {

    public function getAll() {
        $products = Products::all();
        $context = ['products' => $products];

        return view('admin/product/all', $context);
    }

    public function getDetail($id) {
        $product = Products::find($id);
        $context = ['product' => $product];

        return view('admin/product/detail', $context);
    }

    public function create() {
        return view('admin/product/create');
    }

    public function createSubmit(ProductsRequest $request) {
        $product = new Products;

        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->picture = $request->input('picture');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        $product->save();

        return redirect()->route('admin-product-detail', $product->id)->with('success', 'Продукт был добавлен.');
    }

    public function update($id) {
        $product = Products::find($id);
        $context = ['product' => $product];

        return view('admin/product/update', $context);
    }

    public function updateSubmit($id, ProductsRequest $request) {
        $product = Products::find($id);

        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->picture = $request->input('picture');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        $product->update();

        return redirect()->route('admin-product-detail', $product->id)->with('success', 'Продукт был обновлен.');
    }

    public function delete($id) {
        $product = Products::find($id);
        $product->delete();

        return redirect()->route('admin-product-all')->with('success', 'Продукт был удален.');
    }

}
