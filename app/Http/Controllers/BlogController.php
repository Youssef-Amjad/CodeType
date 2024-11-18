<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        // $posts = Article::with('categories')->paginate(5);

        $posts = [];

        return view('blog.index', compact('posts'));
    }

    public function article(string $slug): View
    {
        // $post = Article::where('slug', '=', $slug)->with(['categories', 'user'])->firstOrFail();
        // $post['tags'] = collect(['php', 'laravel', 'web', 'js', 'backend', 'Tips', 'Treks']);
        // dd($post);

        $post = collect([
            'slug' => 'meet-studio-our-new-agency-template',
            'description' => 'meet-studio-our-new-agency-template',
            'categories' => [

            ],
            'tags' => collect(['php', 'laravel', 'web', 'js', 'backend', 'Tips', 'Treks']),
            'user' => [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'avatar' => 'https://example.com/johndoe.jpg',
            ]
        ]);

        return view('blog.article', compact('post'));
    }
}
