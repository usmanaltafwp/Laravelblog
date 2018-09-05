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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


///Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::get('/', function () {
    return view('/home');
	});
   
	Route::get('/profile/edit', 'PublishUserController@editUser');
	Route::Patch('/profile/edit', 'PublishUserController@updateUser');
	//Post Route
	Route::get('/posts', 'PostsController@index');
	Route::get('/post/create', 'PostsController@create');
	Route::post('/posts', 'PostsController@store');
	Route::get('/post/edit/{id}','PostsController@edit');
	Route::patch('/post/{id}','PostsController@update');

});



