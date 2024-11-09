FROM php:7.4.23-fpm as base
 
RUN docker-php-ext-install mysqli pdo pdo_mysql 

ENV DB_HOST mysql
 
FROM base
 
CMD ["php-fpm"]