FROM php:7.3-fpm-stretch

RUN apt-get update
RUN apt-get install -y zlib1g-dev libmemcached-dev \
    && pecl install memcached \
    && docker-php-ext-enable memcached
