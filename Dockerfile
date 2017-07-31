FROM php:7.0-apache
COPY / /var/www/html
COPY /default.conf /etc/apache2/sites-enabled/000-default.conf
EXPOSE 80

RUN apt-get update
RUN apt-get install -y --force-yes git zip unzip vim 

#PDO
RUN docker-php-ext-install pdo_mysql

#MODE_REWRITE
RUN a2enmod rewrite && service apache2 restart
