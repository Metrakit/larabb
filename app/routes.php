<?php

/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
|
*/
$routesGeneral = function()
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
	    Route::get('/account', array('before' => 'auth', 'as' => 'account', 'uses'=>'AccountController@show'));

	    // Register (GET) route
	    Route::get('/register', array('before' => 'inscriptions|guest', 'as' => 'account/create', 'uses'=>'UserController@create'));

	    // Register (POST) route
	    Route::post('/register', array('before' => 'inscriptions|guest', 'as' => 'account/store', 'uses'=>'UserController@store'));


	    /*
	    *
	    * LoginController
	    *
	    */

	    // Login route
	    Route::get('/login', array('before' => 'guest', 'as' => 'login', 'uses'=>'AuthController@login'));

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
     // Inscriptions route
    Route::get('/error/inscriptions', array('as' => 'error/inscriptions', 'uses'=>'ErrorController@inscriptions'));


};



/*
|--------------------------------------------------------------------------
| Forum Routes
|--------------------------------------------------------------------------
|
*/
$routesForum = function()	
{
    Route::get('/', array('as' => 'forum', 'uses'=>'ForumController@show'));
};



/*
|--------------------------------------------------------------------------
| Shop Routes
|--------------------------------------------------------------------------
|
*/
$routesShop = function()
{
    Route::get('/', array('as' => 'shop', 'uses'=>'ShopController@show'));
};



/*
|--------------------------------------------------------------------------
| Gallery Routes
|--------------------------------------------------------------------------
|
*/

$routesGallery = function()
{
    Route::get('/', array('as' => 'gallery', 'uses'=>'GalleryController@show'));
};




/*
|--------------------------------------------------------------------------
| Forum Routes
|--------------------------------------------------------------------------
|
*/
$routesSearch = function()	
{
	// Search home (GET)
    Route::get('/', array('as' => 'search', 'uses'=>'SearchController@show'));

    // Search home (POST)
    Route::post('/', array('as' => 'search', 'uses'=>'SearchController@show'));
};



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

$routesAdmin = function()
{
    Route::get('/', array('as' => 'admin', 'uses'=>'AdminController@show'));

    Route::get('/settings', array('as' => 'admin/settings', 'uses'=>'AdminController@settings'));
    Route::post('/settings', array('as' => 'admin/settings/update', 'uses'=>'AdminController@updateSettings'));
    Route::post('/modules', array('as' => 'admin/modules/update', 'uses'=>'AdminController@updateModules'));   

    // User list
    Route::get('/users', array('as' => 'admin/users', 'uses'=>'AdminController@users'));
};




/*
|--------------------------------------------------------------------------
| General Route
|--------------------------------------------------------------------------
|
*/
Route::group(array('domain' => 'www.' . Config::get('setting.domain')), $routesGeneral);
Route::group(array('domain' => Config::get('setting.domain')), $routesGeneral);



/*
|--------------------------------------------------------------------------
| Modules Routes
|--------------------------------------------------------------------------
|
*/

// Forum
if (Config::get('setting.subdomains')) {
	Route::group(array('before' => 'module:forum', 'domain' => 'forum.' . Config::get('setting.domain')), $routesForum);
} else {
	Route::group(array('before' => 'module:forum', 'prefix' => 'forum'), $routesForum);
}

// Shop
if (Config::get('setting.subdomains')) {
	Route::group(array('before' => 'module:shop', 'domain' => 'shop.' . Config::get('setting.domain')), $routesShop);
} else {
	Route::group(array('before' => 'module:shop', 'prefix' => 'shop'), $routesShop);
}

// Gallery
if (Config::get('setting.subdomains')) {
	Route::group(array('before' => 'module:gallery', 'domain' => 'gallery.' . Config::get('setting.domain')), $routesGallery);
} else {
	Route::group(array('before' => 'module:gallery', 'prefix' => 'gallery'), $routesGallery);
}

// Search
if (Config::get('setting.subdomains')) {
	Route::group(array('before' => 'module:search', 'domain' => 'search.' . Config::get('setting.domain')), $routesSearch);
} else {
	Route::group(array('before' => 'module:search', 'prefix' => 'search'), $routesSearch);
}

/*
|--------------------------------------------------------------------------
| Admin Route
|--------------------------------------------------------------------------
|
*/
if (Config::get('setting.subdomains')) {
	Route::group(array('before' => 'role:admin', 'domain' => 'admin.' . Config::get('setting.domain')), $routesAdmin);
} else {
	Route::group(array('before' => 'role:admin', 'prefix' => 'admin'), $routesAdmin);
}
