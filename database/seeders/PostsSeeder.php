<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate 10 fake posts (visible)
        \App\Models\Post::factory()
            ->count(10)
            ->create(['is_visible' => 1]);
    
        // Custom curated posts
        $posts = [
            [
                'title' => '2NE1’s CL Faces Backlash for Racist Slur',
                'slug' => Str::slug('2NE1’s CL Faces Backlash for Racist Slur'),
                'excerpt' => 'K-pop idol CL sparked controversy after a resurfaced video showed her using a racial slur...',
                'content' => '<p>CL, leader of the now-disbanded group 2NE1, is under fire...</p>',
                'image' => 'posts/cl_thumbnail.jpg',
                'category_id' => 5,
                'author' => 1,
            ],
            [
                'title' => 'K-Drama Star in Cheating Scandal',
                'slug' => Str::slug('K-Drama Star in Cheating Scandal'),
                'excerpt' => 'Famous Korean drama actor caught in a cheating controversy...',
                'content' => '<p>The scandal involves allegations of infidelity...</p>',
                'image' => 'posts/cheating_star.png',
                'category_id' => 2,
                'author' => 1,
            ],
        ];
    
        foreach ($posts as $post) {
            // Prevent duplicates on reseeding
            \App\Models\Post::updateOrCreate(['slug' => $post['slug']], $post);
        }
    }
}
