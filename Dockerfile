

FROM php:8.2-apache

COPY . /var/www/html/

RUN mkdir -p /var/www/html/uploads
RUN chmod -R 007 /var/www/html/uploads

VOLUME ["/var/www/html/uploads"]