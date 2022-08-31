<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleList extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        $roles = Role::where('name', 'LIKE', '%' . $this->search . '%')->get();;
        return view('livewire.role-list', compact('roles'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
