<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        return view('backend.pages.category.index');
    }
    public function create()
    {
        return view('backend.pages.category.create');
    }
    public function store(CategoryStoreRequest $category)
    {
        return $category->all();
    }
    public function edit($id)
    {
        return view('backend.pages.category.edit');
    }
    public function update()
    {

    }
    public function destroy()
    {

    }
}
