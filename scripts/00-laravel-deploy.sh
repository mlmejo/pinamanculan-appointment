#!/usr/bin/env bash
echo "Running composer"
composer install --no-dev --working-dir=/var/www/html

echo "Building assets"
npm install
npm run build

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Publishing livewire components"
sail php artisan vendor:publish --force --tag=livewire:assets

echo "Running migrations..."
php artisan migrate --force
