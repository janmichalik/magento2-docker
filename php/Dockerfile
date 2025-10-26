FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libmariadb-dev \
    libssl-dev \
    unzip \
    git \
    zip \
    libxml2-dev \
    libcurl4-openssl-dev \
    libicu-dev \
    libxslt1-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    libreadline-dev \
    libmagickwand-dev \
    libmagickcore-dev \
    && docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-install \
    pdo \
    pdo_mysql \
    mysqli \
    intl \
    soap \
    xsl \
    zip \
    opcache \
    bcmath \
    gd \
    sockets \
    ftp


WORKDIR /var/www/html
