<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class ListPost extends Component
{

    use WithPagination;

    public $name;
    public $slug;
    public $search = '';

    public function render()
    {
        if (auth()->user()->hasPermissionTo('users.index')) {
            $posts = Post::filter($this->search)->paginate(15);
        } else {
            $posts = Post::where('user_id', auth()->user()->id)->filter($this->search)->paginate(15);
        }

        return view('livewire.list-post', compact('posts'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
