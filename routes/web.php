<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/login', ['as'=>'get.login','uses'=>'Auth\LoginController@getLogin'])->middleware('guest')->name('login');;
Route::post('/login', ['as'=>'post.login','uses'=>'Auth\LoginController@postLogin']);

Route::get('/coureses', 'HomeController@coureses');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/blog', 'HomeController@blog');


Route::get('/dashboard', ['as'=>'get.dashboard','uses'=>'Admin\DashboardController@index'])->name('dashboard');
include('admin.php');