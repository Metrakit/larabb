<?php

class Setting extends Eloquent {

	protected $table 	= 'settings';
	protected $primaryKey	= 'id';

	public $timestamps	= false;
	
	
	public static function allCache() 
	{
	  return Cache::rememberforever('settings', function()
	  {
	    return Setting::all();
	  });
	}	

}
