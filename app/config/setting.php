<?php

$settings = array();

foreach(Setting::allCache() as $setting) {
    $settings[$setting->label] = $setting->value;
}

return $settings;