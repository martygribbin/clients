<?php

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

Route::get('/', function () {return view('welcome');});

Auth::routes();

//public routes
Route::get('/dashboard', 'HomeController@index');
Route::resource('users/tasks', 'UserTaskController');


//admin routes
Route::group(['middleware' => 'admin'], function()
{
	Route::get('admin/dashboard', 'HomeController@index');
	Route::get('admin/routes', 'HomeController@admin');
	Route::resource('admin/task', 'AdminTaskController');
   	Route::resource('admin/user', 'UserController');
   	Route::resource('admin/notification', 'NotificationController');
});