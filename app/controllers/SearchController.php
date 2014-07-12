<?php

class SearchController extends BaseController {

	/**
	 * Search home
	 * @return View
	 */
	public function show()
	{
		return View::make('search.show');
	}


}
