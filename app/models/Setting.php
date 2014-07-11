<?php

class Setting extends Eloquent {

	protected $table 	= 'settings';
	protected $primaryKey	= 'id';

	public $timestamps	= false;
	
	public static function make()
	{
		foreach (Setting::allCache() as $setting) {
			Config::set('setting_' . $setting->label, $setting->value);
		}
	}

	public static function clear()
	{
		return Cache::forget('settings');
	}
	
	public static function allCache() 
	{
	  return Cache::rememberforever('settings', function()
	  {
	    return Setting::all();
	  });
	}	

}
