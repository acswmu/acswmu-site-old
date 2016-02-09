<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.homepage');
});

Route::get('/meetings', function()
{
	return View::make('pages.meeting');
});
Route::get('/Feb192014',function()
{
	return View::make('pages.Feb192014');
});

Route::get('/faq', function()
{
	return View::make('pages.faq');
});

Route::get('/constitution', function()
{
	return View::make('pages.constitution');
});


Route::get('/curprojects', function()
{
	return View::make('pages.curprojects');
});


Route::get('/comprojects', function()
{
	return View::make('pages.comprojects');
});

Route::get('/login', function()
{
	return View::make('pages.login');
});
Route::get('/futprojects', function()
{
	return View::make('pages.futprojects');
});
Route::controller('users', 'UsersController');

Route::filter('auth', function()
{
    if (Auth::guest()) return Redirect::guest('users/login');
});
