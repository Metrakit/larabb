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
		
	}



}
