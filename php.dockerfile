# Php Dockerfile

#Install and setup php
FROM php:8.1-fpm
WORKDIR /var/www/html
RUN pecl install mongodb
RUN docker-php-ext-enable mongodb

#Install and setup composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY composer.json .
RUN apt-get -y update
RUN apt-get -y install git
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install
RUN ls