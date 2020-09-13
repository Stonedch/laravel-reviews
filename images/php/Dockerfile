FROM php:7.4-fpm

ARG UNAME
ARG UID
ARG GID

RUN apt-get update \
    && apt-get install -y curl wget git zip unzip nodejs npm\
    && docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# RUN curl -sL https://deb.nodesource.com/setup_12.x -o nodesource_setup.sh
# RUN bash nodesource_setup.sh
# RUN apt-get install nodejs -y
# RUN npm install npm@latest -g

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

WORKDIR /var/www/html

RUN groupadd -g $GID $UNAME \
    && useradd -m -u $UID -g $GID -s /bin/bash $UNAME

USER $UNAME

CMD ["php-fpm"] 