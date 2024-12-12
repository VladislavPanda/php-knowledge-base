setup-project:
	cp .env.example .env
	docker compose up --build -d
	docker exec -it php-knowledge-base-backend-php-fpm bash -c "composer install"
	docker exec -it php-knowledge-base-backend-php-fpm bash -c "chgrp -R www-data storage bootstrap/cache"
	docker exec -it php-knowledge-base-backend-php-fpm bash -c "chmod -R ug+rwx storage bootstrap/cache"
	docker exec -it php-knowledge-base-backend-php-fpm bash -c "php artisan key:generate"
	docker exec -it php-knowledge-base-backend-php-fpm bash -c "php artisan migrate"
	npm install -D sass-embedded
	npm install

up:
	docker compose up --build -d

start:
	docker compose start

down:
	docker compose down

stop:
	docker compose stop

terminal:
	docker exec -it php-knowledge-base-backend-php-fpm bash

migrate:
	docker exec -it php-knowledge-base-backend-php-fpm bash -c "php artisan migrate"

rollback:
	docker exec -it php-knowledge-base-backend-php-fpm bash -c "php artisan migrate:rollback"

vite-run:
	npm run dev

setup-permissions:
	docker exec -it php-knowledge-base-backend-php-fpm bash -c "chgrp -R www-data storage bootstrap/cache"
	docker exec -it php-knowledge-base-backend-php-fpm bash -c "chmod -R ug+rwx storage bootstrap/cache"
