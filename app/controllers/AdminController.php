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
	public function settings()
	{
		$data['modules'] = Module::getAll();

		return View::make('admin.settings', $data);
	}


	/**
	 * Update settings
	 * @return [type]
	 */
	public function updateSettings()
	{
		foreach (Input::except('_token') as $setting => $value) {
			if ($value) {
				//Module::enable($module);
			} else {
				//Module::disable($module);
			}			
		}

		return Redirect::back();
	}
	

	/**
	 * Update modules
	 * @return [type]
	 */
	public function updateModules()
	{
		foreach (Input::except('_token') as $module => $value) {
			if ($value) {
				Module::enable($module);
			} else {
				Module::disable($module);
			}
		}

		return Redirect::back();
	}


	/**
	 * User list
	 * @return View
	 */
	public function users()
	{
		$data['users'] = User::all();

		return View::make('admin.users', $data);
	}				

}
