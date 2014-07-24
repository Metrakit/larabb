<?php

// Check if module exist
Blade::extend(function($value) {
	// Old Regex : /(?<=\s)@module\((.*)/
	// New Regex okay : @module\('([a-zA-Z]+)'\)
	return preg_replace("/@module\('(\w+)'\)/", '<?php if (Module::isEnabled($1) : ?>', $value);
});

// End of check
Blade::extend(function($value, $compiler) {
	$pattern = $compiler->createPlainMatcher('endmodule');
	$replace = '<?php endif; ?>';
	return preg_replace($pattern, '$1'.$replace, $value);
});


// Check user role
Blade::extend(function($value) {
	return preg_replace('/(?<=\s)@role\((.*)/', '<?php if (Auth::check() && Auth::user()->hasRole($1) : ?>', $value);
});

// End of check user role
Blade::extend(function($value, $compiler) {
	$pattern = $compiler->createPlainMatcher('endrole');
	$replace = '<?php endif; ?>';
	return preg_replace($pattern, '$1'.$replace, $value);
});
