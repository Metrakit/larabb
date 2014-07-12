<?php

class Module extends Eloquent {


	/**
	 * Show link if module is enabled
	 * @param  String $module
	 * @param  String $target
	 * @param  String $text
	 * @return Mixed
	 */
	public static function link($module, $target, $text) 
	{
		if (Module::isEnabled($module)) {
			return "<li><a href=". $target .">". $text ."</a></li>";
		} else {
			return null;
		}
	  
	}


	/**
	 * Check if the module is enabled
	 * @param  String $module
	 * @return Boolean
	 */
	public static function isEnabled($module) 
	{
		return Config::get('setting_module_' . $module) ? true : false;	  
	}


	/**
	 * Enable a module
	 * @param  String $module
	 * @return Boolean
	 */
	public static function enable($module) 
	{
		Setting::clear();
		Setting::where('label', 'module_' . $module)->update(array('value' => true));
		return Setting::make();
	}


	/**
	 * Disable a module
	 * @param  String $module
	 * @return Boolean
	 */
	public static function disable($module) 
	{
		Setting::clear();
		Setting::where('label', 'module_' . $module)->update(array('value' => false));
		return Setting::make();
	}


	public static function getAll()
	{
		$data = array();
		foreach (Setting::allCache() as $setting) {
			
			if (preg_match("/module_/i", $setting->label)) {
				$data[substr($setting['label'], 7)] = $setting['value'];
			}
		}

		return $data;
	}


}
