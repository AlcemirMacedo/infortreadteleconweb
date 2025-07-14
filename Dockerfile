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

# Copia script de inicialização
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Expondo porta padrão (Railway define via variável $PORT)
EXPOSE 80

# Comando de inicialização
CMD ["/entrypoint.sh"]
