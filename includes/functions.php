<?php
require_once 'config.php';

function validateDomain($domain) {
    $domain = preg_replace('#^https?://#', '', $domain);
    $pattern = '/^(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,}$/';
    return preg_match($pattern, $domain) && checkdnsrr($domain, 'ANY');
}

function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

function logError($message) {
    error_log(date('Y-m-d H:i:s') . " - " . $message . "\n", 3, LOGS_DIR . 'error.log');
}
