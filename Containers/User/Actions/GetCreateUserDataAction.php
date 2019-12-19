<?php

namespace Containers\User\Actions;

use Containers\User\Models\User;
use Spatie\Permission\Models\Role;

class GetCreateUserDataAction
{
    public function run() : array
    {
        return [
            'roles' => Role::all(),
        ];
    }
}
