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
		Cache::forget('settings');
		Config::set('setting_module_' . $module, true);
		return Setting::where('label', 'module_' . $module)->update(array('value' => true));
	}


	/**
	 * Disable a module
	 * @param  String $module
	 * @return Boolean
	 */
	public static function disable($module) 
	{
		Cache::forget('settings');
		Config::set('setting_module_' . $module, false);
		return Setting::where('label', 'module_' . $module)->update(array('value' => false));
	}


}
