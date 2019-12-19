<?php

namespace Containers\User\Actions;

use Dto\DtoInterface;
use Containers\User\Models\User;

class UpdateUserAction
{
    public function run(DtoInterface $data) : User
    {
        $user = User::findOrFail($data->user_id);
        $user->update(array_filter($data->toArray()));

        if (auth()->user()->hasRole('admin')) {
            $user->syncRoles($data->role->toScalar());
        }

        return $user;
    }
}
