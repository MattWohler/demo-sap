<?php

namespace Containers\User\Containers\Permission\Tasks;

use Illuminate\Support\Collection;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class GetRoleToPermissionMatrixTask
{
    public function run() : Collection
    {
        return Role::all()->map(function($role) {
            return [
                'id'     => $role['id'],
                'name'   => $role['name'],
                'matrix' => $this->buildPermissionsMatrix($role)
            ];
        });
    }

    private function buildPermissionsMatrix(Role $role) : Collection
    {
        return Permission::all()->mapWithKeys(function ($permission) use ($role) {
            return [
                $permission['name'] => $role->hasPermissionTo($permission['name'])
            ];
        });
    }
}
