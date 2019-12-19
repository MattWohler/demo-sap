<?php

namespace Containers\User\Actions;

use Dto\DtoInterface;
use Containers\User\Models\User;

class CreateUserAction
{
    public function run(DtoInterface $data) : User
    {
        return tap(User::create($data->toArray()), function($user) use ($data) {
            $user->assignRole($data->role->toScalar());
        });
    }
}
