<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class TagList extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        $tags = Tag::where('name', 'LIKE', '%' . $this->search . '%')->get();
        return view('livewire.tag-list', compact('tags'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
