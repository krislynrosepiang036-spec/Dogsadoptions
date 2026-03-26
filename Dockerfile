FROM php:8.2-fpm

WORKDIR /var/www/html


RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


COPY . .


RUN composer install --no-dev --optimize-autoloader

RUN php artisan storage:link \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 8080


CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8080