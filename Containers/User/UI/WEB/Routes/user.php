<?php

Route::group([
    'namespace'  => '\Containers\User\UI\WEB\Controllers',
    'middleware' => ['web', 'auth', 'role:admin'],
], function() {

    Route::get('users/{uid}/edit', [
        'uses'  => 'UserController@edit',
        'as'    => 'web.user.edit',
    ]);
    Route::patch('users/{uid}', [
        'uses'  => 'UserController@patch',
        'as'    => 'web.user.patch',
    ]);
    Route::get('users/create', [
        'uses'  => 'UserController@create',
        'as'    => 'web.user.create',
    ]);
    Route::post('users', [
        'uses'  => 'UserController@store',
        'as'    => 'web.user.store',
    ]);
    Route::get('users{extension?}', [
        'uses'  => 'UserController@index',
        'as'    => 'web.user.index',
        'where' => ['extension' => '^(.json)$'],
    ]);
});
