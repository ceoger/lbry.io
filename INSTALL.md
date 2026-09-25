# Installation

## Prerequisites
To run this project, you'll need PHP 8.5 or newer, Composer, and macOS or Linux.

## Development
- Install [PHP 8.5 or newer](https://www.php.net/downloads.php)
- Install the PHP extensions `curl`, `dom`, `intl`, `mbstring`, `pdo_mysql`, and `xml`
- Check out the project
- Run `./dev.sh` from the project root
- Access [localhost:8000](http://localhost:8000) in your browser

## Verifying Install
If `localhost:8000` returns the lbry.com website, it's running correctly.

## Additional Notes
- The `dev.sh` script will initialize a configuration based on `data/config.php.example` if `data/config.php` does not exist.
- Some pages and interactions rely on API keys that will not be available to you in your install.
- For production, configure Nginx and PHP-FPM to use `web/index.php` as the front controller.
