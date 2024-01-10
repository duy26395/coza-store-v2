cp ./laravel/.env.example ./laravel/.env

docker-compose up -d --build

docker exec coza_store_php-fpm chmod -R 777 storage/ /bin/bash
docker exec coza_store_php-fpm php artisan key:generate

#seeder
docker exec coza_store_php-fpm php artisan migrate --seed
