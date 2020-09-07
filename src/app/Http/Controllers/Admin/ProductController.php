<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Log;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin/product/index', [
            'products' => Product::all(),
        ]);
    }

    public function show($id)
    {
        return view('admin/product/detail', [
            'product' => Product::find($id),
        ]);
    }

    public function create()
    {
        return view('admin/product/create');
    }


    public function store(ProductRequest $request)
    {
        $product = new Product;
        $product->fill($request->validated());
        $product->picture = storePictureOrNull($product->slug, $request->file('picture'));
        $product->save();

        Log::debug('Product [id: '.$product->id.'] successfully stored');

        return redirect()->route('admin.product.show', $product->id)
                         ->with('success', 'Product added');
    }

    public function edit($id) {
        return view('admin/product/update', [
            'product' => Product::find($id),
        ]);
    }

    public function update($id, ProductRequest $request) {
        $product = Product::find($id);
        $product->fill($request->validated());
        $product->picture = storePictureOrNull($product->slug, $request->file('picture')) ?? $product->picture;
        $product->update();

        Log::debug('Product [id: '.$product->id.'] successfully updated');

        return redirect()->route('admin.product.show', $product->id)
                         ->with('success', 'Product updated');
    }

    public function destroy($id) {
        Product::find($id)->delete();

        Log::debug('Product [id: '.$id.'] successfully destroyed');

        return redirect()->route('admin.product.index')
                         ->with('success', 'Product destroyed');
    }
}
