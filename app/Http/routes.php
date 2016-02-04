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

//Route::get('/', 'WelcomeController@index');
//Route::get('home', 'HomeController@index');

Route::get('/', 'CategoriesController@index');
Route::get('home', 'CategoriesController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::model('blogs', 'Blog');
Route::model('categories', 'Category');

Route::resource('categories', 'CategoriesController');
Route::resource('categories.blogs', 'BlogsController');

Route::bind('blogs', function($value, $route){
	return App\Blog::whereSlug($value)->first();
});
Route::bind('categories', function($value, $route){
	return App\Category::whereSlug($value)->first();
});
