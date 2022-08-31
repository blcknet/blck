<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function blog()
    {
        return view('home.blog');
    }

    public function testimonials()
    {
        return view('home.testimonials');
    }

    public function services()
    {
        return view('home.services');
    }

    public function privacy()
    {
        return view('home.privacy');
    }

    public function blogPost(Post $post)
    {
        $related_posts = Post::where('category_id', $post->category->id)->where('id', '<>', $post->id)->take(2)->get();

        return view('home.blog-post', compact('post', 'related_posts'));
    }
}
