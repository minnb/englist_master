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
        Route::post('about', ['as'=>'post.dashboard.page.about','uses'=>'Admin\AboutController@post_about']);

        Route::get('choose', ['as'=>'get.dashboard.page.choose','uses'=>'Admin\AboutController@choose']);
        Route::post('choose', ['as'=>'post.dashboard.page.choose','uses'=>'Admin\AboutController@post_choose']);
    });
 
    Route::group(['prefix'=> 'product'], function()
    {
        Route::get('list', ['as'=>'get.dashboard.product.list','uses'=>'Admin\ProductController@list']);
        Route::get('create', ['as'=>'get.dashboard.product.create','uses'=>'Admin\ProductController@create']);
        Route::post('create', ['as'=>'post.dashboard.product.create','uses'=>'Admin\ProductController@post_create']);
        Route::get('edit/{id}', ['as'=>'get.dashboard.product.edit','uses'=>'Admin\ProductController@edit'])->where('id', '[0-9]+');;
        Route::post('edit/{id}', ['as'=>'post.dashboard.product.edit','uses'=>'Admin\ProductController@post_edit'])->where('id', '[0-9]+');;
    });   

});
