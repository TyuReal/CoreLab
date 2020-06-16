#!/bin/bash
#php artisan optimize;
php artisan cache:clear;
php artisan view:clear;
php artisan config:clear;
#php artisan config:cache;
php artisan route:clear;
#php artisan route:cache;

echo "Laravel - Кэш очищен!"
