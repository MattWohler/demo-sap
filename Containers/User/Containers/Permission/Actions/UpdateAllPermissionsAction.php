<?php

namespace Containers\User\Containers\Permission\Actions;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UpdateAllPermissionsAction
{
    public function run(array $roles) : void
    {
        foreach($roles as $role) {
            $permissionsToSync = array_filter($role['matrix'], function($item) {
                return $item;
            });

            $permissions = Permission::whereIn('name', array_keys($permissionsToSync))->get();

            Role::find($role['id'])->syncPermissions($permissions);
        }
    }
}
