<?php

namespace App\Http\Controllers\Blog;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name'=>'required|string|max:255']);
        BlogCategory::create($request->only('name'));
        return redirect()->route('categories.index')->with('success','Category created');
    }

    public function edit(BlogCategory $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, BlogCategory $category)
    {
        $request->validate(['name'=>'required|string|max:255']);
        $category->update($request->only('name'));
        return redirect()->route('categories.index')->with('success','Category updated');
    }

    public function destroy(BlogCategory $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success','Category deleted');
    }
}
