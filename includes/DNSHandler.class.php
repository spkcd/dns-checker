<?php
class DNSHandler {
    private $domain;
    
    public function __construct($domain) {
        $this->domain = $domain;
    }
    
    public function getRecords() {
        try {
            $records = dns_get_record($this->domain, DNS_ALL);
            return $records ?: false;
        } catch (Exception $e) {
            logError("DNS lookup failed: " . $e->getMessage());
            return false;
        }
    }
    
    // Add more methods for specific record types
}
