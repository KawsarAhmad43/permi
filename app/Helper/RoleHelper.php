<?php

namespace App\Helper;

use App\Models\Role;
use App\Models\Permission;

class RoleHelper{

    public static function givePermissionTo(Role $role, $permissions){

        $permissions = is_array($permissions)
            ? Permission::whereIn('slug', $permissions)->get()
            : Permission::where('slug', $permissions)->firstOrFail();

        $role->permissions()->syncWithoutDetaching($permissions);

    }


    public static function removePermissionFrom(Role $role, $permissions)
    {
        $permissions = is_array($permissions)
            ? Permission::whereIn('slug', $permissions)->get()
            : Permission::where('slug', $permissions)->firstOrFail();

        $role->permissions()->detach($permissions);

    }


}










