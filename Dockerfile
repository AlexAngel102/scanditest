FROM php:8.1-apache
ENV APACHE_DOCUMENT_ROOT=/var/www/

RUN apt-get update && apt-get upgrade -y && apt-get autoremove && apt-get autoclean


RUN docker-php-ext-install mysqli pdo_mysql
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
#RUN chmod -R ugo+rwx /var/www/
