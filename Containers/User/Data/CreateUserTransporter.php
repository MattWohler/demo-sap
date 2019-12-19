<?php

namespace Containers\User\Data;

use Dto\Dto;
use Illuminate\Http\Request;

class CreateUserTransporter extends Dto
{
    protected $schema = [
        'type' => 'object',
        'properties' => [
            'first_name' => ['type' => 'string'],
            'last_name'  => ['type' => 'string'],
            'password'   => ['type' => 'string'],
            'email'      => ['type' => 'string'],
            'role'       => ['type' => 'string'],
        ],
        'required' => ['first_name', 'last_name', 'password', 'email', 'role'],
    ];

    public static function fromRequest(Request $request) : self
    {
        return new self([
            'first_name' => $request->input('first_name'),
            'last_name'  => $request->input('last_name'),
            'password'   => $request->input('password') ,
            'email'      => $request->input('email'),
            'role'       => $request->input('role'),
        ]);
    }
}
