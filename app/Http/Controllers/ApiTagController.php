<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class ApiTagController extends Controller
{
    public function destroy(Request $request)
    {
        $tags = explode(',', $request->tags);

        foreach ($tags as $tagId) {

            $tag = Tag::find($tagId);

            $tag->delete();
        }

        return response()->json($tags);
    }
}
