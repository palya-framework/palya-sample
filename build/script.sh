#!/usr/bin/env bash

echo 'Taking care of apt ...'
add-apt-repository ppa:ondrej/php-7.0
apt-get update -y

echo 'Taking care of std ...'
apt-get install -y curl git

echo 'Taking care of php ...'
apt-get install -y php7.0 php7.0-fpm php7.0-opcache php-xdebug

echo 'Taking care of composer ...'
curl -sS https://getcomposer.org/installer | php
mv ./composer.phar /usr/local/bin/composer
