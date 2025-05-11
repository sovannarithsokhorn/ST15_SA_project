#!/bin/bash
set -euo pipefail

# Use Render's built-in PHP
export PATH=/opt/php/bin:$PATH

# Install Composer
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install dependencies
/usr/local/bin/composer install --no-dev --optimize-autoloader

# Laravel optimization
php artisan optimize

