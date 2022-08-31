<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class HomePostList extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::where('status', 1)->latest('id')->paginate(5);
        return view('livewire.home-post-list', compact('posts'));
    }
}
