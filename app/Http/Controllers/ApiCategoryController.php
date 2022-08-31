<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ApiCategoryController extends Controller
{
    public function destroy(Request $request)
    {
        $categories = explode(',', $request->categories);

        foreach ($categories as $categoryId) {

            $category = Category::find($categoryId);

            $category->delete();
        }

        return response()->json($categories);
    }
}
