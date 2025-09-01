FROM richarvey/nginx-php-fpm:3.1.6

COPY . .

RUN chmod -R 755 /var/www/html/public && \
    chown -R www-data:www-data /var/www/html

RUN ps aux | grep php-fpm > /tmp/php_fpm_status.txt


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

RUN php artisan cache:clear && \
    php artisan config:clear && \
    php artisan route:clear


CMD ["/start.sh"]