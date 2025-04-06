<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(): Factory|Application|View
    {
        $posts = Post::with('user')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('home', compact('posts'));
    }

    public function showPost(string $slug): Factory|Application|View
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('blog-content.show-post', compact('post'));
    }
}
