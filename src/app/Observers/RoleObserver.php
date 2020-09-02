<?php

namespace App\Observers;

use App\Models\Role;
use Illuminate\Support\Str;

class RoleObserver
{
    public function saving(Role $role)
    {
        $role->slug =
            $role->slug ?? Str::slug($role->name);
    }
}
