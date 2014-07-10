<?php

class Setting extends Eloquent {

	protected $table 	= 'setting';
	protected $primaryKey	= 'id';

	public $timestamps	= false;
	
	
	public function allCache() 
	{
	  return Cache::rememberforever('settings', function()
	  {
	    return Setting::all();
	  });
	}	

}
