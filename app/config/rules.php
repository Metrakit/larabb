<?php

/*
|--------------------------------------------------------------------------
| Rules for the Validator
|--------------------------------------------------------------------------
*/

return array(
	'login'			=>	array (
		'name'				=> 'required|min:3|max:20',
		'password'			=> 'required|min:6|max:20|alphanum',
	),

);