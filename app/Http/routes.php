<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
| This is a test controller. It should be commented out on production push.
*/
Route::get('dev', 'DevController@test');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'auth'], function (){
    Route::get('page/create', [ 'as' => 'page.create', 'uses' => 'PageController@create']);
    Route::post('page', [ 'as' => 'page.store', 'uses' => 'PageController@store']);
    Route::get('page/{page}/edit', [ 'as' => 'page.edit', 'uses' => 'PageController@edit']);
    Route::put('page/{page}', [ 'as' => 'page.update', 'uses' => 'PageController@update']);
    Route::patch('page/{page}', [ 'uses' => 'PageController@update']);
    Route::delete('page/{page}', [ 'as' => 'page.destroy', 'uses' => 'PageController@destroy']);
});
Route::get('page', ['as' => 'page.index', 'uses' => 'PageController@index']);
Route::get('page/{page}', [ 'as' => 'page.show', 'uses' => 'PageController@show']);

Route::group(['middleware' => 'auth'], function (){
    Route::get('post/create', [ 'as' => 'post.create', 'uses' => 'PostController@create']);
    Route::post('post', [ 'as' => 'post.store', 'uses' => 'PostController@store']);
    Route::get('post/{post}/edit', [ 'as' => 'post.edit', 'uses' => 'PostController@edit']);
    Route::put('post/{post}', [ 'as' => 'post.update', 'uses' => 'PostController@update']);
    Route::patch('post/{post}', [ 'uses' => 'PostController@update']);
    Route::delete('post/{post}', [ 'as' => 'post.destroy', 'uses' => 'PostController@destroy']);
});
Route::get('post', ['as' => 'post.index', 'uses' => 'PostController@index']);
Route::get('post/{post}', [ 'as' => 'post.show', 'uses' => 'PostController@show']);
