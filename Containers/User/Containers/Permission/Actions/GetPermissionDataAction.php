<?php

namespace Containers\User\Containers\Permission\Actions;

use Containers\User\Containers\Permission\Tasks\GetRoleToPermissionMatrixTask;

class GetPermissionDataAction
{
    public function run() : array
    {
        return [
            'roles' => app(GetRoleToPermissionMatrixTask::class)->run(),
        ];
    }
}
