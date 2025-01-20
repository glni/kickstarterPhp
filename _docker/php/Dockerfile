# Brug en officiel PHP8.4-apache base image
FROM php:8.4-apache

WORKDIR /var/www/html

# Kopier php.ini konfiguration
COPY ./_docker/php/php.ini /usr/local/etc/php/conf.d/custom.ini

# Installer nødvendige PHP-udvidelser
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Indstil roden af mappen som webroot
#ENV APACHE_DOCUMENT_ROOT /var/www/html

# Aktivér mod_rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf && \
    a2enmod rewrite
