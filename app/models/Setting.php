<?php

class Setting extends Eloquent {

	protected $table 	= 'settings';
	protected $primaryKey	= 'id';

	public $timestamps	= false;
	

	/**
	 * Make the seetings
	 * @return Boolean
	 */
	public static function make()
	{
		foreach (Setting::allCache() as $setting) {
			Config::set('setting_' . $setting->label, $setting->value);
		}
		return true;
	}


	/**
	 * Clear the Settings cache
	 * @return Boolean
	 */
	public static function clear()
	{
		return Cache::forget('settings');
	}
	

	/**
	 * Get Settings with cache
	 * @return Array
	 */
	public static function allCache() 
	{
	  return Cache::rememberforever('settings', function()
	  {
	    return Setting::all();
	  });
	}	

}
