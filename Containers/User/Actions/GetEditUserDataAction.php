<?php

namespace Containers\User\Actions;

use Dto\DtoInterface;
use Containers\User\Models\User;
use Spatie\Permission\Models\Role;

class GetEditUserDataAction
{
    public function run(DtoInterface $userId) : array
    {
        return [
            'roles' => Role::all(),
            'user'  => User::where('id', $userId)->with('roles')->firstOrFail(),
        ];
    }
}
