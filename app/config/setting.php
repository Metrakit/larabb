<?php

$settings = array();

foreach(Setting::allCache() as $setting) {
	$settings[$setting->label] = $setting->value;
}

if (!array_key_exists("brandname", $settings) || $settings['brandname'] == null) {
	$settings['brandname'] = "LaraBB";
}

return $settings;