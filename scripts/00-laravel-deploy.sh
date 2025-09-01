#!/usr/bin/env bash 
echo "Exécution de composer" 
composer global require hirak/prestissimo 
composer install --no-dev --working-dir=/var/www/html 
composer require fakerphp/faker --dev

echo "génération de la clé d'application..." 
php artisan key:generate --show 

echo "Configuration de mise en cache..." 
php artisan config:cache 

echo "Mise en cache des routes..." 
php artisan route:cache 

echo "Migrations en cours..." 
php artisan migrate --force


echo "Setting permissions..."
chown -R nginx:nginx /var/www/html
chmod -R 775 /var/www/html/storage
chmod -R 775 /var/www/html/bootstrap/cache

echo "Création des seeders..."
php artisan db:seed --force