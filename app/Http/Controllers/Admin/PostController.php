<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:posts.index')->only('index');
        $this->middleware('can:posts.create')->only('create', 'store');
        $this->middleware('can:posts.edit')->only('edit', 'update');
        $this->middleware('can:posts.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->all());

        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }

        if ($request->file('file')) {
            // open an image file
            $img = Image::make($request->file('file'));
            // resize image instance
            $img->fit(1280, 720);

            $url = 'posts/' . md5(uniqid(rand(), true)) . '.' . $request->file('file')->getClientOriginalExtension();

            if (!is_dir('storage/public/posts')) {
                Storage::makeDirectory('/posts');
            }

            $img->save('storage/' . $url);

            $post->image()->create(
                [
                    'url' => $url
                ]
            );
        } else {
            $post->image()->create(
                [
                    'url' => 'posts/default.jpg'
                ]
            );
        }

        return redirect()->route('posts.index')->with('info', 'Post creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, Post $post)
    {
        $this->authorize('author', $post);

        $post->update($request->all());

        if ($request->tags) {
            $post->tags()->sync($request->tags);
        }

        if ($request->file('file')) {
            // open an image file
            $img = Image::make($request->file('file'));

            // resize image instance
            $img->fit(1280, 720);

            $url = 'posts/' . md5(uniqid(rand(), true)) . '.' .  $request->file('file')->getClientOriginalExtension();

            if (!is_dir('storage/public/posts')) {
                Storage::makeDirectory('/posts');
            }

            $img->save('storage/' . $url);

            if ($post->image) {
                Storage::delete($post->image->url);

                $post->image->update(
                    [
                        'url' => $url
                    ]
                );
            } else {
                $post->image->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('posts.index')->with('info', 'Post actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
