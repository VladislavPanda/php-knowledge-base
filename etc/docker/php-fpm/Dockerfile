FROM php:8.3-fpm

WORKDIR /var/www/php-knowledge-base-backend

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpq-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN docker-php-ext-install pdo mysqli pdo_mysql mbstring exif pcntl bcmath gd xml

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug
CMD ["php-fpm"]
