<?php

namespace Containers\User\UI\WEB\Responses;

use App\Http\Response;
use Containers\User\Models\User;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Contracts\Support\Renderable;

class UserIndexResponse extends Response
{
    public function __construct($users)
    {
        $this->users = $users;
    }

    public function toJsonResponse() : JsonResponse
    {
        return DataTables::eloquent($this->users)->toJson();
    }

    public function toHtmlResponse() : Renderable
    {
        return component('IndexUser');
    }
}
