<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')->paginate(9);
        return view('livewire.user-list', compact('users'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
