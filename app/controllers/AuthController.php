<?php

class AuthController extends BaseController {


	/**
	 * View for log in an user
	 * @return View
	 */
	public function login()
	{
		return View::make('user.login');
	}


	/**
	 * Check the authentication
	 * @return Redirect
	 */
	public function check()
	{
		// Using the Validator
		$validator = Validator::make(Input::all(), Config::get('rules.login'));		
		
		if ($validator->fails()) {
			// Return back with errors and inputs
			return Redirect::back()->withErrors($validator)->withInput();
		} else {

			// Detect if the input is an email or an username
			$type = (filter_var(Input::get('name'), FILTER_VALIDATE_EMAIL)) ? 'email' : 'name'; 

			// Auth attempt
			if (Auth::attempt(array($type => Input::get('name'), 'password' => Input::get('password')), Input::get('remenber'))) {
			    return Redirect::route('account');
			} else {
				return Redirect::back()->with('message', Lang::get('text.wrong_id'));
			}
			
		}
	}


	/**
	 * Log out the user
	 * @return View
	 */
	public function logout()
	{
		// Logout user
		Auth::logout();

		return Redirect::route('home');
	}	


}
