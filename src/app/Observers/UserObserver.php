<?php

namespace App\Observers;

use App\Models\Role;
use App\Models\User;

class UserObserver
{
    public function saving(User $user)
    {
        $user->roles_id_foreign =
            $user->roles_id_foreign ?? Role::where('slug', '=', 'user')->firstOrFail()->id;
    }
}
