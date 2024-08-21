<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=> 'dashboard'], function()
{

    Route::group(['prefix'=> 'auth'], function()
    {
        Route::get('logout', ['as'=>'get.dashboard.auth.logout','uses'=>'AuthController@getLogout']);
    });

    Route::group(['prefix'=> 'post'], function(){
        Route::get('list', ['as'=>'get.dashboard.post.list','uses'=>'Admin\PostController@list']);

    });

});
