FROM php:8.2-fpm

# Instala extensões do PHP
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    npm \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define diretório de trabalho
WORKDIR /var/www

# Copia o projeto
COPY . .

# Instala dependências Laravel
RUN composer install --no-dev --optimize-autoloader

RUN php artisan config:clear && php artisan config:cache

RUN php artisan route:cache

RUN php artisan config:clear && php artisan config:cache

RUN chmod -R 775 storage bootstrap/cache

# Corrige permissões do Laravel
RUN mkdir -p storage/logs && \
    chmod -R 775 storage bootstrap/cache && \
    chown -R www-data:www-data storage bootstrap/cache


# Permissões da pasta de storage e cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000
