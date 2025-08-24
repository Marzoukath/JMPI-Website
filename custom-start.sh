#!/bin/bash
set -e

echo "🚀 Configuration FORCÉE pour Laravel..."

# Tuer tous les processus nginx existants
pkill nginx || true
sleep 2

# Configuration nginx Laravel OBLIGATOIRE
cat > /etc/nginx/sites-available/default << 'EOF'
server {
    listen 80;
    server_name _;
    root /var/www/html/public;
    index index.php index.html;

    # Logs
    error_log /dev/stdout info;
    access_log /dev/stdout;

    # CRITIQUE: Redirection Laravel
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    # PHP processing
    location ~ \.php$ {
        try_files $uri =404;
        fastcgi_pass unix:/var/run/php-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    # Static files
    location ~* \.(css|js|jpg|jpeg|gif|png|ico|svg)$ {
        expires 1y;
        access_log off;
    }

    # Security
    location ~ /\. {
        deny all;
    }
}
EOF

# Copier aussi dans sites-enabled
cp /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

# Supprimer la config par défaut si elle existe
rm -f /etc/nginx/sites-enabled/default_server || true

# Tester la configuration
nginx -t || (echo "❌ Erreur config nginx" && cat /etc/nginx/sites-available/default && exit 1)

echo "✅ Configuration nginx Laravel appliquée"

# Laravel optimizations
cd /var/www/html
php artisan route:clear || true
php artisan config:clear || true
php artisan view:clear || true

# Fix permissions
chown -R www-data:www-data storage bootstrap/cache || true
chmod -R 775 storage bootstrap/cache || true

echo "🔥 Démarrage avec configuration Laravel..."

# Démarrer PHP-FPM
php-fpm -D

# Démarrer nginx en avant-plan
nginx -g "daemon off;"