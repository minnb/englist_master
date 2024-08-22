<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=> 'dashboard'], function()
{
    Route::group(['prefix'=> 'auth'], function()
    {
        Route::post('logout', ['as'=>'get.dashboard.auth.logout','uses'=>'Admin\DashboardController@getLogout'])->name('logout');
    });

    Route::group(['prefix'=> 'page'], function()
    {
        Route::get('about', ['as'=>'get.dashboard.page.about','uses'=>'Admin\AboutController@about']);
        Route::post('about', ['as'=>'get.dashboard.page.about','uses'=>'Admin\AboutController@post_about']);


    });
    

});
