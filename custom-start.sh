#!/bin/bash
set -e

echo "🚀 RECONFIGURATION COMPLÈTE NGINX pour Laravel..."

# Arrêter tous les services
pkill nginx || true
pkill php-fpm || true
sleep 3

# Supprimer TOUTES les configurations existantes
rm -rf /etc/nginx/sites-enabled/*
rm -rf /etc/nginx/sites-available/*

# Créer UNE SEULE configuration nginx ultra simple
cat > /etc/nginx/sites-available/laravel << 'EOF'
server {
    listen 80;
    server_name _;
    root /var/www/html/public;
    index index.php;

    error_log /dev/stdout info;
    access_log /dev/stdout;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        try_files $uri =404;
        fastcgi_pass unix:/var/run/php-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~* \.(css|js|jpg|jpeg|gif|png|ico|svg)$ {
        expires 1y;
        access_log off;
    }
}
EOF

# Activer UNIQUEMENT cette configuration
ln -sf /etc/nginx/sites-available/laravel /etc/nginx/sites-enabled/laravel

# Supprimer la configuration nginx principale qui pourrait interférer
cat > /etc/nginx/nginx.conf << 'EOF'
user www-data;
worker_processes auto;
pid /var/run/nginx.pid;

events {
    worker_connections 1024;
}

http {
    include /etc/nginx/mime.types;
    default_type application/octet-stream;

    log_format main '$remote_addr - $remote_user [$time_local] "$request" '
                    '$status $body_bytes_sent "$http_referer" '
                    '"$http_user_agent" "$http_x_forwarded_for"';

    sendfile on;
    tcp_nopush on;
    tcp_nodelay on;
    keepalive_timeout 65;
    types_hash_max_size 2048;

    include /etc/nginx/sites-enabled/*;
}
EOF

# Tester la configuration
echo "🔧 Test configuration nginx..."
nginx -t || (echo "❌ Config nginx invalide" && exit 1)

echo "✅ Configuration nginx OK"

# Laravel setup
cd /var/www/html
php artisan route:clear || true
php artisan config:clear || true
php artisan view:clear || true

# Permissions
chown -R www-data:www-data storage bootstrap/cache || true
chmod -R 775 storage bootstrap/cache || true

echo "🚀 Démarrage PHP-FPM..."
php-fpm -D

echo "🚀 Démarrage Nginx..."
nginx -g "daemon off;" &

# Attendre que nginx démarre
sleep 2

echo "✅ Services démarrés - Test des routes..."

# Test local pour vérifier
curl -s http://localhost/test > /tmp/test_result.txt 2>&1 &
curl -s http://localhost/events > /tmp/events_result.txt 2>&1 &

sleep 2

echo "📝 Test /test:"
head -n 3 /tmp/test_result.txt 2>/dev/null || echo "Pas de réponse"

echo "📝 Test /events:"
head -n 3 /tmp/events_result.txt 2>/dev/null || echo "Pas de réponse"

# Garder nginx en avant-plan
wait