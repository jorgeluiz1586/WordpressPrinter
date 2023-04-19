FROM php:8.2-zts-bullseye

RUN apt update && apt upgrade -y && \
    apt install bash git libfreetype6-dev libjpeg62-turbo-dev libpng-dev libpq-dev -y

RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) gd && \
    docker-php-ext-install pdo pdo_mysql pdo_pgsql mysqli

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer


WORKDIR /var/www

COPY ./wordpress /var/www

EXPOSE 1215
EXPOSE 8080
EXPOSE 8181
EXPOSE 80
