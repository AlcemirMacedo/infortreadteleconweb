FROM php:8.2-fpm

# Instala extensões do PHP necessárias ao Laravel
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev libxml2-dev libzip-dev npm \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define diretório de trabalho
WORKDIR /var/www

# Copia arquivos do projeto Laravel
COPY . .

# Garante que os diretórios existem
RUN mkdir -p storage/logs bootstrap/cache

# Ajusta permissões ANTES de rodar Artisan
RUN chmod -R 775 storage bootstrap/cache && \
    chown -R www-data:www-data storage bootstrap/cache

# Instala dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# ⚠️ Os comandos Artisan precisam de APP_KEY e .env válidos
# Certifique-se de que Railway tenha a variável APP_KEY no painel
RUN php artisan config:clear && \
    php artisan config:cache && \
    php artisan route:cache

# Expondo porta
EXPOSE 80

# Comando de inicialização do Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "${PORT:-8000}"]
