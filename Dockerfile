FROM php:7.4-fpm-alpine

COPY /src /var/www/html

WORKDIR /src /var/www/html

RUN docker-php-ext-install pdo pdo_mysql
