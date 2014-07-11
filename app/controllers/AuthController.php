<?php

class AuthController extends BaseController {

	public function login()
	{
		return View::make('user.login');
	}

	public function check()
	{
		// Using the Validator
		$validator = Validator::make(Input::all(), Config::get('rules.login'));		
		
		if ($validator->fails()) {
			// Return back with errors and inputs
			return Redirect::back()->withErrors($validator)->withInput();
		} else {


			return Redirect::route('account');
		}
	}


	public function logout()
	{
		return View::make('home');
	}	

}
