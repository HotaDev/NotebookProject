FROM php:7.4.23-fpm as base
 
# Задаем расположение рабочей директории
ENV WORK_DIR /var/www/application
 
FROM base
 
# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]