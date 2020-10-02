<?php

namespace App\Repository;

use App\Product;

class ProductRepository
{
    public function getAllProduct()
    {
        return Product::all();
    }

    public function getProductById($id)
    {
        return Product::findOrFail($id);
    }

    public function addProduct($data)
    {
        Product::create($data);
    }




}
