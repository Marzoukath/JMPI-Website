FROM richarvey/nginx-php-fpm:3.1.6

# Copy application files
COPY . .

# Copy the nginx configuration
COPY nginx-site /etc/nginx/sites-available/default

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html/storage && \
    chmod -R 755 /var/www/html/bootstrap/cache

# Clear Laravel caches
RUN php artisan cache:clear && \
    php artisan config:clear && \
    php artisan route:clear && \
    php artisan config:cache && \
    php artisan route:cache

CMD ["/start.sh"]