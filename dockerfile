FROM php:8.0-apache

WORKDIR /var/www/html

COPY ./site .

RUN docker-php-ext-install mysqli && \
    docker-php-ext-install pdo pdo_mysql && \
    docker-php-ext-enable mysqli pdo pdo_mysql  && \
    apachectl restart

EXPOSE 80