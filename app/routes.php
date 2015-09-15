<?php

/*
|--------------------------------------------------------------------------
| Application Routes, Public View routes.
|--------------------------------------------------------------------------
*/

//setting up the language for entire website
// setting up language
Route::get('language/{language}', function ($language) {
	  Session::put('lang', $language);
      return Redirect::back();
});

//route to the home page
Route::get('/', function()
{
	return View::make('index');
});

//Registration route
Route::get('/register', function(){
	return View::make('pages/register');
});

//route to login page
Route::get('/login', function(){
	return View::make('pages/login');
});

//route to contact us page
Route::get('/contact', function(){
	return View::make('pages/contactus');
});

Route::post('/sendMessage', 'ActivitiesController@sendMessage')->before('csrf');

//route to the about us page
Route::get('/about', function(){
	return View::make('pages/about');
});

//controller to handle session things; login, logout ...
Route::post('/register_user', 'SessionController@handleRegister')->before('csrf');
