<?php

namespace Containers\User\Containers\Permission\Traits;

use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

trait ExposePermissions
{
    /**
     * Get all user permissions.
     *
     * @return bool
     */
    public function getAllPermissionsAttribute()
    {
        return $this->getAllPermissions();
    }

     /**
     * Get all user permissions in a flat array.
     *
     * @return array
     */
    public function getCanAttribute()
    {
        $permissions = [];

        foreach (Permission::all() as $permission) {

            $permissions[$permission->name] = false;

            if (Auth::user()->can($permission->name)) {
                $permissions[$permission->name] = true;
            }
        }

        return $permissions;
    }
}
