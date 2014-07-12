<?php

class ErrorController extends BaseController {

	/**
	 * Module enabled => Error
	 * @return View
	 */
	public function module()
	{
		return View::make('error.module');
	}

	/**
	 * Inscriptions closed => Error
	 * @return View
	 */
	public function inscriptions()
	{
		return View::make('error.inscriptions');
	}


}
