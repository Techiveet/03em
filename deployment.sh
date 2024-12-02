#!/bin/bash

echo "Starting Deployment..."

# Navigate to the subdomain's directory
cd /home/techiveetcom/03em.com || exit

# Pull the latest changes from the main branch
git pull origin main

# Install Composer dependencies
composer install --no-dev --optimize-autoloader

# Run migrations
php artisan migrate --force

# Clear and cache configuration
php artisan cache:clear
php artisan config:cache
php artisan route:cache

# Set permissions
chmod -R 775 storage bootstrap/cache

echo "Deployment Complete!"
