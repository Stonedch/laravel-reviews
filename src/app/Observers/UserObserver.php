<?php

namespace App\Observers;

use App\Models\Role;
use App\Models\User;

class UserObserver
{
    public function saving(User $user)
    {
        $user->role_id =
            $user->role_id ?? Role::where('slug', '=', 'user')->firstOrFail()->id;
    }
}
