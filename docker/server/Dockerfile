FROM php:8.0-apache

RUN a2enmod rewrite

RUN apt-get update && apt-get install -y git unzip zip

RUN docker-php-ext-install pdo_mysql


WORKDIR /var/www/html
