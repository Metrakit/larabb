<?php

class HomeController extends BaseController {

	public function show()
	{
		return View::make('home');
	}

}
