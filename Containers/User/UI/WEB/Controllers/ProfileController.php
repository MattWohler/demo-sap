<?php

namespace Containers\User\UI\WEB\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Containers\User\Actions\GetEditUserDataAction;
use Containers\User\Data\UserComponentTransporter;

class ProfileController extends Controller
{
    public function index(Request $request, GetEditUserDataAction $action) : Renderable
    {
        $transporter = new UserComponentTransporter($request->user()->id);

        return component('EditUser', $action->run($transporter));
    }
}
