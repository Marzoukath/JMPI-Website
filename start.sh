#!/bin/bash

# Set proper permissions
chown -R nginx:nginx /var/www/html
chmod -R 775 /var/www/html/storage
chmod -R 775 /var/www/html/bootstrap/cache

# Run the original start script
exec /start.sh