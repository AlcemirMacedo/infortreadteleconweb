#!/bin/sh

echo "Iniciando Laravel..."

# Garante que o .env esteja carregado corretamente
php artisan config:clear
php artisan config:cache
php artisan route:cache

echo "Laravel pronto. Iniciando servidor na porta $PORT"
echo "DEBUG: A porta recebida do Railway é: $PORT" # Adicione esta linha!

# Usa exatamente a porta definida pelo Railway
php artisan serve --host=0.0.0.0 --port=${PORT}
