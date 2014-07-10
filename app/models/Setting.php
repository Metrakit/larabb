	$users = Cache::rememberforever('usersss', function()
	{
		var_dump('dsq');
		return User::all();
	});
	<?php

class Role extends Eloquent {

	protected $table 		= 'role';
	protected $primaryKey	= 'IdRole';

	public $timestamps	= false;

}
