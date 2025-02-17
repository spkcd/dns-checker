
# DNS Record Checker

A powerful and user-friendly PHP application for checking and analyzing DNS records of any domain. This tool provides detailed DNS information with support for multiple record types, caching, rate limiting, and export capabilities.

![DNS Record Checker Screenshot](assets/img/screenshot.png)

## 🚀 Features

- **Comprehensive DNS Analysis**
  - Support for all major DNS record types (A, AAAA, MX, CNAME, NS, TXT, SOA, SRV, CAA, PTR)
  - Detailed record information display
  - TTL monitoring
  - Real-time lookups

- **Advanced Functionality**
  - Caching system for improved performance
  - Rate limiting to prevent abuse
  - Historical record tracking
  - Multiple domain comparison
  - Asynchronous loading
  - Export to CSV/PDF

- **User Experience**
  - Clean, responsive interface
  - Easy-to-read record presentation
  - Loading indicators
  - Error handling and validation

## 📋 Requirements

- PHP 7.4 or higher
- Apache/Nginx web server
- mod_rewrite enabled
- Write permissions for cache, logs, and history directories
- DNS lookup capabilities enabled in PHP

## 🔧 Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/dns-checker.git
cd dns-checker
	2.	Set up directory permissions:
chmod 755 cache ratelimit history logs
chmod 644 cache/.htaccess ratelimit/.htaccess history/.htaccess logs/.htaccess
	3.	Install dependencies:
composer install
	4.	Configure your web server:
For Apache, ensure the following modules are enabled:
mod_rewrite
mod_headers
For Nginx, add the following to your server block:
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
🛠️ Configuration
	1.	Update ⁠includes/config.php with your settings:
define('CACHE_DURATION', 3600); // Cache duration in seconds
define('RATE_LIMIT', 10);       // Requests per minute
	2.	Set your timezone in ⁠includes/config.php:
date_default_timezone_set('Your/Timezone');
📦 Directory Structure
dns-checker/
├── assets/           # CSS, JavaScript, and images
├── cache/            # Cache storage
├── ratelimit/        # Rate limiting data
├── history/          # Historical records
├── includes/         # PHP classes and functions
├── api/             # API endpoints
├── export/          # Export handlers
├── templates/       # HTML templates
├── logs/            # Error logs
└── vendor/          # Composer dependencies
🚦 Usage
	1.	Access the application through your web browser
	2.	Enter a domain name in the input field
	3.	View the comprehensive DNS record information
	4.	Export or analyze the results as needed
API Usage
The application provides a REST API for DNS lookups:
curl -X POST https://your-domain.com/api/dns-lookup.php \
  -H "Content-Type: application/json" \
  -d '{"domain": "example.com"}'
🔍 Features in Detail
Record Types Supported
	•	A Records: IPv4 addresses
	•	AAAA Records: IPv6 addresses
	•	MX Records: Mail servers
	•	CNAME Records: Canonical names
	•	NS Records: Nameservers
	•	TXT Records: Text records
	•	SOA Records: Start of authority
	•	SRV Records: Service records
	•	CAA Records: Certificate authority authorization
	•	PTR Records: Pointer records
Export Options
	•	CSV export with detailed record information
	•	PDF export with formatted layout
	•	JSON API response for integration
🛡️ Security
	•	Input validation and sanitization
	•	Rate limiting protection
	•	XSS prevention
	•	Error logging
	•	Protected sensitive directories
🤝 Contributing
	1.	Fork the repository
	2.	Create your feature branch (⁠git checkout -b feature/AmazingFeature)
	3.	Commit your changes (⁠git commit -m 'Add some AmazingFeature')
	4.	Push to the branch (⁠git push origin feature/AmazingFeature)
	5.	Open a Pull Request
📝 License
This project is licensed under the MIT License - see the LICENSE.md file for details.
👥 Authors
	•	Your Name - Initial work - YourGitHub
🙏 Acknowledgments
	•	Bootstrap for the UI framework
	•	PHP community for DNS handling functions
	•	Contributors and testers
📮 Contact
	•	Project Link: https://github.com/yourusername/dns-checker
	•	Your Website: https://yourwebsite.com
