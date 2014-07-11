<?php

// Check if module exist
Blade::extend(function($value) {
	return preg_replace('/(?<=\s)@module\((.*)/', '<?php if (Module::isEnabled($1) : ?>', $value);
});
 

// End of check
Blade::extend(function($value, $compiler) {
	$pattern = $compiler->createPlainMatcher('endmodule');
	$replace = '<?php endif; ?>';
	return preg_replace($pattern, '$1'.$replace, $value);
});