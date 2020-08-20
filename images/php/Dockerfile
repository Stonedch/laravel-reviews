FROM php:7.2-fpm

RUN apt-get update \
    && apt-get install -y curl wget git zip unzip nodejs npm\
    && docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

WORKDIR /var/www/html

CMD ["php-fpm"]

