FROM webdevops/php-nginx-dev:ubuntu-16.04

RUN apt-get update && apt-get install -y \
    sudo \
    curl \
    wget \
    zsh \
    httpie \
    redis-tools \
    htop \
    vim \
    mc

RUN curl -sL https://deb.nodesource.com/setup_6.x | sudo -E bash - \
    && apt-get install -y nodejs

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer

EXPOSE 80 443

WORKDIR /app