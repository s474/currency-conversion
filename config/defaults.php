<?php

// Configure defaults for the whole application.

// Error reporting
error_reporting(1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

// Timezone
date_default_timezone_set('Europe/London');

// Settings
$settings = [];

// Path settings
$settings['root'] = dirname(__DIR__);
$settings['public'] = $settings['root'] . '/public';

return $settings;
