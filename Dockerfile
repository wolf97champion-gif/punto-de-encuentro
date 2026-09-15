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

# Copiar .env.example, configurar Postgres con el Pooler de Supabase y SSL, dar permisos y generar la key
RUN cp .env.example .env \
    && sed -i 's/DB_CONNECTION=.*/DB_CONNECTION=pgsql/' .env \
    && sed -i 's/DB_HOST=.*/DB_HOST=aws-0-sa-east-1.pooler.supabase.com/' .env \
    && sed -i 's/DB_PORT=.*/DB_PORT=6543/' .env \
    && sed -i 's/DB_DATABASE=.*/DB_DATABASE=postgres/' .env \
    && sed -i 's/DB_USERNAME=.*/DB_USERNAME=postgres.qoloxbgftwuigkxluumf/' .env \
    && sed -i 's/DB_PASSWORD=.*/DB_PASSWORD=1q2w3e4r5t6y7u8i9o0pmicha/' .env \
    && echo "DB_SSLMODE=require" >> .env \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 777 storage bootstrap/cache \
    && php artisan key:generate --force

EXPOSE 10000
RUN sed -i 's/80/10000/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

CMD ["apache2-foreground"]