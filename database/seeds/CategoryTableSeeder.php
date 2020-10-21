<?php

use Illuminate\Database\Seeder;
use App\Category;
use Mock\CategoryMock;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(CategoryMock::categories() as $category ){
            Category::create($category);
        }
    }
}
