#
FROM php:8.2-apache
#MAINTAINER
LABEL maintainer="KiddAitken"

#COPY CONFIG FILES
COPY .docker/php/php.ini /usr/local/etc/php/
COPY .docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf
#COPY PROJECT DATA WITH CORRECT PERMISSIONS = LOADING SPEED!
COPY --chown=www-data:www-data /app /srv/app

#INSTALL EXTENSIONS: mysql, opcache(prd), mod_rewrite
RUN apt-get update; \
    apt-get install -y --no-install-recommends \
    libzip-dev \
    libjpeg-dev \
    libpng-dev\
    nano;

RUN docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install gd mysqli opcache zip pdo_mysql \
    && docker-php-ext-install opcache \
    && a2enmod rewrite;

#Install Composer
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer 
WORKDIR /srv/app
RUN composer install 
RUN php artisan config:clear
#RUN php artisan key:generate

#Timezone sel contenedor es desde aqui, el timezone de PHP es desde el php.ini en .docker
RUN apt-get install -y tzdata
ENV TZ America/Monterrey


#Configuracion de SSH AZURE
ENV SSH_PASSWD "root:Docker!"
RUN apt-get update \
    && apt-get install -y --no-install-recommends dialog \
    && apt-get update \
    && apt-get install -y --no-install-recommends openssh-server \
    && echo "$SSH_PASSWD" | chpasswd 

COPY .docker/azure/sshd_config /etc/ssh/
COPY .docker/azure/init.sh /srv/
RUN chmod u+x /srv/init.sh


EXPOSE 2222 80



ENTRYPOINT ["/srv/init.sh"]