<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }
    public function store(ProductRequest $request)
    {
        Product::create($request->validated());
    }

    public function destroy(Product $product)
    {
        $product->delete();
    }
}
