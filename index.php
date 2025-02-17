<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
require_once 'includes/DNSHandler.class.php';
require_once 'includes/CacheHandler.class.php';
require_once 'includes/RateLimiter.class.php';

$domain = isset($_POST['domain']) ? sanitizeInput($_POST['domain']) : '';

include 'templates/header.php';

if ($domain) {
    if (!validateDomain($domain)) {
        echo '<div class="alert alert-danger">Invalid domain name</div>';
    } else {
        $dnsHandler = new DNSHandler($domain);
        $records = $dnsHandler->getRecords();
        include 'templates/table.php';
    }
}

include 'templates/footer.php';
