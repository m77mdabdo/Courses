<?php

namespace App\Http\Controllers\Blog;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with(['user','categories'])->latest()->paginate(10);
        $categories = BlogCategory::all();
        $recentPosts = Blog::latest()->take(5)->get();
        return view('user.blog.blog', compact('blogs','categories','recentPosts'));
    }

    public function create()
    {
        $categories = BlogCategory::all();
        return view('blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image',
            'categories' => 'array'
        ]);

        $data = $request->only(['title','content']);
        $data['user_id'] = auth()->id();

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('blogs','public');
        }

        $blog = Blog::create($data);

        if($request->categories){
            $blog->categories()->sync($request->categories);
        }

        return redirect()->route('blogs.index')->with('success','Blog created successfully');
    }

    public function show(Blog $blog)
    {
        $blog->load(['user','categories','comments.user']);
        return view('user.blog.single_blog', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        $categories = BlogCategory::all();
        return view('blogs.edit', compact('blog','categories'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image',
            'categories' => 'array'
        ]);

        $data = $request->only(['title','content']);

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('blogs','public');
        }

        $blog->update($data);

        if($request->categories){
            $blog->categories()->sync($request->categories);
        }

        return redirect()->route('blogs.index')->with('success','Blog updated successfully');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success','Blog deleted successfully');
    }
}
