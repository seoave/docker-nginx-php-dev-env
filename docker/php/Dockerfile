# docker/php/Dockerfile
FROM php:8.1-fpm

# install mysql extension
RUN apt-get update
RUN docker-php-ext-install pdo pdo_mysql mysqli

# install mongo extension
RUN apt-get install -y autoconf pkg-config libssl-dev
RUN pecl install mongodb
RUN echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini