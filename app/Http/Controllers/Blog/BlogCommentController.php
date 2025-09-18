<?php

namespace App\Http\Controllers\Blog;

use App\Models\Blog;
use App\Models\BlogComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCommentController extends Controller
{
    public function store(Request $request, Blog $blog)
    {
        $request->validate([
            'comment' => 'required|string|max:1000'
        ]);

        BlogComment::create([
            'blog_id' => $blog->id,
            'user_id' => auth()->id(),
            'comment' => $request->comment,
        ]);

        return redirect()->route('blogs.show', $blog->id)->with('success','Comment added successfully');
    }

    public function destroy(Blog $blog, BlogComment $comment)
    {
        if($comment->user_id !== auth()->id() && auth()->user()->user_role !== 'admin'){
            abort(403);
        }

        $comment->delete();
        return redirect()->route('blogs.show',$blog->id)->with('success','Comment deleted');
    }
}
