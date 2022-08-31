<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryList extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $categories = Category::where('name', 'LIKE', '%' . trim($this->search) . '%')->paginate();
        return view('livewire.category-list', compact('categories'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
