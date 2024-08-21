setup-project:
	cp .env.example .env
	docker compose up --build -d
	docker exec -it php-knowledge-base-php-fpm bash -c "composer install"
	docker exec -it php-knowledge-base-php-fpm bash -c "chgrp -R www-data storage bootstrap/cache"
	docker exec -it php-knowledge-base-php-fpm bash -c "chmod -R ug+rwx storage bootstrap/cache"
	docker exec -it php-knowledge-base-php-fpm bash -c "php artisan key:generate"

up:
	docker compose up --build -d

start:
	docker compose start

down:
	docker compose down

stop:
	docker compose stop

terminal:
	docker exec -it php-knowledge-base-php-fpm bash
