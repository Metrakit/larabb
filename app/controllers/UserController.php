<?php

class UserController extends BaseController {

	public function show()
	{
		return View::make('user.show');
	}	

	public function create()
	{
		return View::make('user.create');
	}

	public function store()
	{
		// Using the Validator
		$validator = Validator::make(Input::all(), Config::get('rules.register'));		
		
		if ($validator->fails()) {
			// Return back with errors and inputs
			return Redirect::back()->withErrors($validator)->withInput();
		} else {

			$user = new User;
			$user->name = Input::get('name');
			$user->password = Hash::make(Input::get('password'));
			$user->email = Input::get('email');
			$user->role = 1;

			// Create user
			$user->save();

			// Login user
			Auth::login($user);

			return Redirect::route('account')->with('message', Lang::get('text.account_created'));
		}
	}



}
