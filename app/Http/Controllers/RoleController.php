<?php

namespace App\Http\Controllers;

use App\Helper\RoleHelper;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function assignPermission(Role $role)
    {
        RoleHelper::givePermissionTo($role, 'edit_articles');
    }

    public function revokePermission(Role $role)
    {
        RoleHelper::removePermissionFrom($role, 'edit_articles');
    }
}
