<?php

Route::group([
    'prefix'     => 'permissions',
    'namespace'  => '\Containers\User\Containers\Permission\UI\WEB\Controllers',
    'middleware' => ['web', 'auth'],
], function() {

    Route::get('',   ['uses' => 'PermissionController@index', 'as' => 'web.permissions.index']);
    Route::patch('', ['uses' => 'PermissionController@patch', 'as' => 'web.permissions.patch']);
});
