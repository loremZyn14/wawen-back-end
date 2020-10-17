<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
    }

    public function destroy(Category $category)
    {
        $category->delete();
    }

}
