<?php
// Configuration settings
define('CACHE_DURATION', 3600); // 1 hour
define('RATE_LIMIT', 10); // requests per minute
define('CACHE_DIR', __DIR__ . '/../cache/');
define('HISTORY_DIR', __DIR__ . '/../history/');
define('RATE_LIMIT_DIR', __DIR__ . '/../ratelimit/');
define('LOGS_DIR', __DIR__ . '/../logs/');

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', LOGS_DIR . 'error.log');

// Time zone
date_default_timezone_set('Europe/Bucharest');
