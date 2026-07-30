FROM php:8.1-apache

RUN docker-php-ext-install mysqli

RUN a2enmod rewrite

COPY docker/php.ini /usr/local/etc/php/conf.d/zz-custom.ini

COPY . /var/www/html/
