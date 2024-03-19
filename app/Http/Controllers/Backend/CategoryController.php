<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get()->all();
        return view('backend.pages.category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.pages.category.create');
    }

    public function store(CategoryStoreRequest $request, CategoryService $services)
    {
        $services->categoryStore($request);
        $this->setMessage('success', 'Category has been added');
        return redirect()->back();
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.pages.category.edit', compact('category'));
    }

    public function update(CategoryUpdateRequest $request, $id, CategoryService $services)
    {
        $category = Category::find($id);
        $services->categoryUpdate($category, $request);
        $this->setMessage('info', 'Category has been updated');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        $this->setMessage('warning', 'Category has been deleted');
        return redirect()->back();
    }
}
