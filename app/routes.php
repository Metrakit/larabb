<?php

/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
|
*/

$routes = function()
{

    /*
    *
    * HomeController
    *
    */

	// Home route
    Route::get('/', array('as' => 'home', 'uses'=>'HomeController@show'));


    // Module User
    Route::group(array('before' => 'module:user'), function()
	{

	    /*
	    *
	    * UserController
	    *
	    */

	    // Account route
	    Route::get('/account', array('as' => 'account', 'uses'=>'UserController@show'));

	    // Register (GET) route
	    Route::get('/register', array('as' => 'create', 'uses'=>'UserController@create'));

	    // Register (POST) route
	    Route::post('/register', array('as' => 'store', 'uses'=>'UserController@store'));


	    /*
	    *
	    * LoginController
	    *
	    */

	    // Login route
	    Route::get('/login', array('as' => 'login', 'uses'=>'AuthController@login'));

	    // check (login) route
	    Route::post('/check', array('as' => 'check', 'uses'=>'AuthController@check'));

	    // Logout route
	    Route::get('/logout', array('as' => 'logout', 'uses'=>'AuthController@logout'));

	});	  



    /*
    *
    * ErrorController
    *
    */

    // Login route
    Route::get('/error/module', array('as' => 'error/module', 'uses'=>'ErrorController@module'));


};

Route::group(array('domain' => 'www.' . Config::get('app.domain')), $routes);
Route::group(array('domain' => Config::get('app.domain')), $routes);



/*
|--------------------------------------------------------------------------
| Forum Routes
|--------------------------------------------------------------------------
|
*/

Route::group(array('before' => 'module:forum', 'domain' => 'forum.' . Config::get('app.domain')), function()
{

    Route::get('/', array('as' => 'forum', 'uses'=>'ForumController@show'));

});




/*
|--------------------------------------------------------------------------
| Shop Routes
|--------------------------------------------------------------------------
|
*/

Route::group(array('before' => 'module:shop', 'domain' => 'shop.' . Config::get('app.domain')), function()
{

    Route::get('/', array('as' => 'shop', 'uses'=>'ShopController@show'));

});




/*
|--------------------------------------------------------------------------
| Gallery Routes
|--------------------------------------------------------------------------
|
*/

Route::group(array('before' => 'module:gallery', 'domain' => 'gallery.' . Config::get('app.domain')), function()
{

    Route::get('/', array('as' => 'gallery', 'uses'=>'GalleryController@show'));

});




/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::group(array('domain' => 'admin.' . Config::get('app.domain')), function()
{

    Route::get('/', array('as' => 'admin', 'uses'=>'AdminController@show'));

});

