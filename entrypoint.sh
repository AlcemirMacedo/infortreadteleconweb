#!/bin/sh

echo "Iniciando Laravel..."

# Garante que o .env esteja carregado corretamente
php artisan config:clear
php artisan config:cache
php artisan route:cache

echo "Laravel pronto. Iniciando servidor na porta $PORT"

# Usa exatamente a porta definida pela Railway
php artisan serve --host=0.0.0.0 --port=${PORT}
