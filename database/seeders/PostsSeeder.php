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
        // Only curated posts
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
                'title' => 'Cynthia Erivo and Ariana Grande Shed TEARS During Every Interview',
                'slug' => Str::slug('Cynthia Erivo and Ariana Grande Shed TEARS During Every Interview'),
                'excerpt' => 'During the press tour for *Wicked*, both stars became emotional in nearly every interview segment...',
                'content' => '<p>As the *Wicked* press tour continues, Cynthia Erivo and Ariana Grande have sparked conversations after repeatedly breaking down into tears when discussing their roles and friendship...</p>',
                'image' => 'posts/ariana_cynthia_thumbnail.jpg',
                'category_id' => 8,
                'author' => 1,
            ],
        ];

        foreach ($posts as $post) {
            Post::updateOrCreate(['slug' => $post['slug']], $post);
        }
    }
}
