<?php

class AdminController extends BaseController {

	/**
	 * Admin home
	 * @return View
	 */
	public function show()
	{
		return View::make('admin.show');
	}

	/**
	 * Modules administration
	 * @return View
	 */
	public function modules()
	{
		$data['modules'] = Module::getAll();

		return View::make('admin.modules', $data);
	}

	/**
	 * Update modules
	 * @return [type]
	 */
	public function updateModules()
	{
		foreach (Input::except('_token') as $module => $value) {
			var_dump($value);
			if ($value == 1) {
				Module::enable($module);
			} else {
				Module::disable($module);
			}
		}

		return Redirect::back();
	}			

}
