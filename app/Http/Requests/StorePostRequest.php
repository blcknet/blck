<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        $post = $this->route()->parameter('post');

        $rules =  [
            'name' => 'required',
            'slug' => 'required|unique:posts',
            'status' => 'required',
            'file' => 'image|mimes:jpeg,png|max:2000'
        ];

        if ($post) {
            $rules['slug'] = 'required|unique:posts,slug,' . $post->id;
        }

        if ($this->status == 1) {
            $rules = array_merge($rules, [
                'extract' => 'required',
                'body' => 'required',
                'category_id' => 'required',
                'tags' => 'required'
            ]);
        }

        return $rules;
    }
}
