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
         // Create a few categories
        $categories = BlogCategory::factory(5)->create();

        // Get users (students or instructors) or create new ones
        $users = User::factory(10)->create();

        // Create blogs
        Blog::factory(20)
            ->create([
                'user_id' => $users->random()->id,
            ])
            ->each(function ($blog) use ($categories, $users) {
                // Attach categories to the blog
                $blog->categories()->attach($categories->random(rand(1,3))->pluck('id')->toArray());

                // Add random comments
                BlogComment::factory(rand(2,5))->create([
                    'blog_id' => $blog->id,
                    'user_id' => $users->random()->id,
                ]);
            });
    }

    }
