<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogPostsSeeder extends Seeder
{
    public function run()
    {
        DB::table('blog_posts')->insert([
            [
                'title' => 'Sample Blog Post 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sample Blog Post 2',
                'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          
        ]);
    }
}