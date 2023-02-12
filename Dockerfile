FROM php:8.2.2-alpine

WORKDIR /var/www/html
RUN docker-php-ext-install pdo pdo_mysql
