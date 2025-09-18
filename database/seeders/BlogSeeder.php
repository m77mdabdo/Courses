<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use App\Models\BlogComment;
use App\Models\BlogCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         // نعمل شوية كاتيجوريز
        $categories = BlogCategory::factory(5)->create();

        // نجيب Users (طلاب أو مدربين) أو نعمل جدد
        $users = User::factory(10)->create();

        // نعمل Blogs
        Blog::factory(20)
            ->create([
                'user_id' => $users->random()->id,
            ])
            ->each(function ($blog) use ($categories, $users) {
                // ربط الكاتيجوريز بالمدونة
                $blog->categories()->attach($categories->random(rand(1,3))->pluck('id')->toArray());

                // نضيف تعليقات عشوائية
                BlogComment::factory(rand(2,5))->create([
                    'blog_id' => $blog->id,
                    'user_id' => $users->random()->id,
                ]);
            });
    }

    }
