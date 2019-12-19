<?php

namespace Containers\User\Containers\Permission\UI\WEB\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Containers\User\Containers\Permission\Actions\GetPermissionDataAction;
use Containers\User\Containers\Permission\Actions\UpdateAllPermissionsAction;

class PermissionController extends Controller
{
    public function index(GetPermissionDataAction $action)
    {
        return component('IndexPermission', $action->run());
    }

    public function patch(Request $request, UpdateAllPermissionsAction $action)
    {
        return response($action->run($request->all()));
    }
}
