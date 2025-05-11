#!/bin/bash
set -euo pipefail

# Install PHP and Composer
apt-get update && apt-get install -y php php-common php-cli php-zip php-mbstring php-xml

# Install Composer
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install dependencies
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Optimize Laravel
php artisan optimize

