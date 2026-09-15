FROM php:8.2-cli
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY . .
RUN composer install --no-dev --optimize-autoloader

# Configurar clave de Laravel para producción
RUN cp .env.example .env
RUN php artisan key:generate

EXPOSE 10000
CMD php artisan config:clear && php artisan serve --host=0.0.0.0 --port=10000