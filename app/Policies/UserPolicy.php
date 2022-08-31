<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function admin(User $user, $userToDelete)
    {
        if ($userToDelete->hasPermissionTo('users.index')) {
            return false;
        }
        return true;
    }
}
