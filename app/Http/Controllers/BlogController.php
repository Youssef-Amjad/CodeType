<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $posts = Post::with('categories')->paginate(5);

        return view('blog.index', compact('posts'));
    }

    public function post(string $slug): View
    {
        $post = Post::where('slug', '=', $slug)->with(['categories', 'user'])->firstOrFail();
        $post['tags'] = collect(['php', 'laravel', 'web', 'js', 'backend', 'Tips', 'Treks']);
        // dd($post);
        return view('blog.post', compact('post'));
    }
}
