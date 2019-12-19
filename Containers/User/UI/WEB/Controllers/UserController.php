<?php

namespace Containers\User\UI\WEB\Controllers;

use Illuminate\Http\Request;
use Containers\User\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Containers\User\Actions\CreateUserAction;
use Containers\User\Actions\UpdateUserAction;
use Containers\User\Data\CreateUserTransporter;
use Containers\User\Actions\GetEditUserDataAction;
use Containers\User\Data\UserComponentTransporter;
use Containers\User\Actions\GetCreateUserDataAction;
use Containers\User\UI\WEB\Responses\UserIndexResponse;

class UserController extends Controller
{
    public function index() : UserIndexResponse
    {
        return new UserIndexResponse(User::query());
    }

    public function create(GetCreateUserDataAction $action) : Renderable
    {
        return component('CreateUser', $action->run());
    }

    public function edit(int $userId, GetEditUserDataAction $action) : Renderable
    {
        $transporter = new UserComponentTransporter($userId);

        return component('EditUser', $action->run($transporter));
    }

    public function store(Request $request, CreateUserAction $action)
    {
        $transporter = CreateUserTransporter::fromRequest($request);

        $user = $action->run($transporter);

        return ['message' => 'User Added!'];
    }

    public function patch(Request $request, int $userId, UpdateUserAction $action)
    {
        $transporter = CreateUserTransporter::fromRequest($request);
        $transporter->user_id = $userId;

        $user = $action->run($transporter);

        return ['message' => 'User Updated!'];
    }
}
