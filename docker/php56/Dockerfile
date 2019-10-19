FROM php:5.6-fpm-stretch

RUN apt update
RUN docker-php-ext-install -j$(nproc) iconv