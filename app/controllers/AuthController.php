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

			if (Auth::attempt(array('name' => Input::get('name'), 'password' => Input::get('password')), Input::get('remenber'))) {
			    return Redirect::route('account');
			} else {
				return Redirect::back()->with('message', Lang::get('text.wrong_id'));
			}
			
		}
	}


	public function logout()
	{
		// Logout user
		Auth::logout();

		return View::make('home');
	}	

}
