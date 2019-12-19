<?php

namespace Containers\User\Data;

use Dto\Dto;
use Illuminate\Http\Request;

class UserComponentTransporter extends Dto
{
    protected $schema = [
        'type' => 'integer',
        'properties' => [
            'user_id' => ['type' => 'integer'],
        ],
        'required' => ['user_id'],
    ];

    public static function fromRequest(Request $request) : self
    {
        return new self([
            'user_id' => $request->route()->parameter('uid'),
        ]);
    }
}
