<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'unit' => 'required|string',
            'category_id' => 'required|integer',
            'description' => 'required|string'
        ]);

        Product::create($data);
        return response('Product successfully added.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response('Product successfully deleted.');
    }
}
