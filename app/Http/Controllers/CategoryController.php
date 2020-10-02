<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return response(Category::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string'
        ]);

        Category::create($data);

        return response('Category successfully added.');

    }

    public function update(Request $request,Category $category)
    {
        $category->update([
            'name' => $request->name
        ]);
        return response('Category successfully updated.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response('Category successfully deleted.');
    }
}
