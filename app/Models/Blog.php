<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    //
    use HasFactory;
      protected $fillable = ['title', 'content', 'image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(BlogCategory::class, 'blog_category_blog');
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }
}
