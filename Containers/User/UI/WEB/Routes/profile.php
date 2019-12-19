<?php

Route::group([
    'namespace'  => '\Containers\User\UI\WEB\Controllers',
    'middleware' => ['web', 'auth'],
], function() {
    Route::get('profile', [
        'uses'  => 'ProfileController@index',
        'as'    => 'web.profile.index',
    ]);
});
