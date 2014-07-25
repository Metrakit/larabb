<?php

$settings = array();

foreach(Setting::allCache() as $setting) {
	$settings[$setting->label] = $setting->value;
}

if (!array_key_exists("sitename", $settings) || $settings['sitename'] == null) {
	$settings['sitename'] = "LaraBB";
}

return $settings;