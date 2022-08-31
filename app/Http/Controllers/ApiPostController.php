<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    public function destroy(Request $request)
    {
        $posts = explode(',', $request->posts);

        foreach ($posts as $postId) {

            $post = Post::find($postId);

            $post->delete();
        }

        return response()->json($posts);
    }
}
