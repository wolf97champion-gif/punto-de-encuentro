FROM php:8.2-apache

# Instalar dependencias del sistema y Composer
RUN apt-get update && apt-get install -y \
    libpq-dev \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_pgsql

# Copiar Composer desde su imagen oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

# Instalar dependencias de Laravel mediante Composer
RUN composer install --no-dev --optimize-autoloader

# Configurar Apache para apuntar a la carpeta public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -s 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -s 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN a2enmod rewrite

# Copiar .env.example a .env, dar permisos a storage/cache y generar la key de Laravel
RUN cp .env.example .env \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 777 storage bootstrap/cache \
    && php artisan key:generate --force

EXPOSE 10000
RUN sed -i 's/80/10000/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

CMD ["apache2-foreground"]