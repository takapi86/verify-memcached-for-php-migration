FROM php:5.6-fpm-stretch

RUN apt-get update
RUN apt-get install -y zlib1g-dev libmemcached-dev \
    && pecl install memcached-2.2.0 \
    && docker-php-ext-enable memcached