<?php

namespace App\Policies;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    public function roleAdmin(User $user, Role $role)
    {
        if ($role->name == 'Admin') {
            return false;
        }
        return true;
    }
}
