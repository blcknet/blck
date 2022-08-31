<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function author(User $user, $post)
    {
        if ($user->id != $post->user_id && $user->id != 1) {
            return false;
        }
        return true;
    }
}
