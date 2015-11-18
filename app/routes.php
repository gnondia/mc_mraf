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

//========================================================
//Routing to public pages
//========================================================

//route to the home page
Route::get('/', function()
{
	return View::make('index');
});

//Registration route
Route::get('/register', function(){
	return View::make('pages/register');
});

//Logout the user
Route::get('logout', function(){
	Auth::logout();
	return Redirect::to('/');
});

//route to login page
Route::get('/login', function(){
	return View::make('pages/login');
});

//route to contact us page
Route::get('/contact', function(){
	if(Auth::user()){
		$data['contact'] = User::where('email', '=', Auth::user()->email)->first();
		return View::make('pages/contactus')->with($data);
	}
	else
		return View::make('pages/contactus');
});

//route to about us page
Route::get('/about', function(){
	return View::make('pages/aboutus');
});
Route::post('/sendMessage', 'ActivitiesController@sendMessage')->before('csrf');

//route to the about us page
Route::get('/about', function(){
	return View::make('pages/about');
});

//route to forgot password page
Route::get('/forgotpassword', function(){
	return View::make('pages/forgotpassword');
});

Route::get('/postblog', function(){
	return View::make('pages/postblog');
});

//===========================================================
//Routing to pages with session infos
//===========================================================

//products page
Route::get('/product/products', function(){
	return View::make('pages/products');
});

//controller to handle session things; login, logout ...
Route::post('/register_user', 'SessionController@handleRegister')->before('csrf');
Route::post('/login_user', 'SessionController@handleLogin')->before('csrf');

//get update information page
Route::get('/account/accout_update', function(){
	if(Auth::user()){
		return View::make('pages/updateaccount');
	}
	else {
		return Redirect::to('/');
	}
});

Route::post('/account_update', function(){
	if(!Auth::user()){
			return Redirect::to('/')->with('alertError', 'You are not an authenticated user !!!!');
		}

		$updateData = Input::all();
		$updateRules = array(
			'name' => 'required',
			'sname' => 'required',
			);
		$updateValidator = Validator::make($updateData,$updateRules);

		if( $updateValidator->passes()) {
			$userToUpdate = new User(find(Auth::user()->id));
			$userToUpdate->name = Input::get('name');
			$userToUpdate->sname = Input::get('sname');
			$userToUpdate->email = Input::get('email');
			$userToUpdate->save();
			return Redirect::back()->with('alertMessage',"Account Updated Successfully");
		}
		if($updateValidator->fails())
		{
			return Redirect::back()->withInput()->withErrors($updateValidator);
		}
});


// Adding products as admin
Route::get('/admin/addproduct', function(){
	if(!Auth::user()){
		return Redirect::to('/')->with('alertError', "You don't have permission to access this page!!!   
			You don't have permission to access this page!!!   You don't have permission to access this page!!! 
			Access Access Denied Denied!!!");
	}

	if(Auth::user()->email === "alangiderick@gmail.com"){
		return View::make('admin/index');
	}
	else {
		throw new Exception("You don't have permission to access this page", 1);
	}
});

Route::post('/admin/addproduct', function(){
		$productData = Input::all();
		$productRules = array(
			'pname' => 'required',
			'price' => 'required',
			'p_owner' => 'required',
			'phone' => 'required',
			'measurement' => 'required',
			'quantity' => 'required',
			);
		$productValidator = Validator::make($productData,$productRules);
		if( $productValidator->fails()) {
			return Redirect::back()->withInput()->withErrors($productValidator);
		}

		$product = new Product();
		$product->name = Input::get('pname');
		$product->price = Input::get('price');
		$product->owner_name = Input::get('p_owner');
		$product->owner_email = Input::get('email');
		$product->owner_tel = Input::get('phone');
		$product->measurement = Input::get('measurement');
		$product->quantity_in_stock = Input::get('quantity');

		if(Input::hasFile('picture')){
	        $rulesForFile = array(
	            'prod_picture' => 'max:1000|required|mimes:jpeg,jpg,png',
	        );

	        $validatorForFile = Validator::make(Input::all(), $rulesForFile);
	        $fileName = $productData['prod_picture'];
	        Input::file('prod_picture')->move('products/', $fileName);
	        $products->picture = $fileName;
	    }
		$product->save();

		return Redirect::back()->with('alertMessage', 'Product added successfully');
});