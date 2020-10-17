<?php

use Illuminate\Database\Seeder;
use Mock\ProductMock;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(ProductMock::products() as $product ){
            Product::create($product);
        }

    }
}
