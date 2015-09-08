<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

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
