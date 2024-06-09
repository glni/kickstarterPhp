# Brug en officiel PHP8.3-apache base image
FROM php:8.3-apache

# Kopier php.ini konfiguration
COPY php.ini /usr/local/etc/php/

# Installer nødvendige PHP-udvidelser
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Indstil roden af mappen som webroot
ENV APACHE_DOCUMENT_ROOT /var/www/html

# Skift Apache DocumentRoot
RUN sed -ri -e 's!/var/www/html!/var/www/html!' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!/var/www/html!' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Aktivér mod_rewrite
RUN a2enmod rewrite

# Indstil ServerName for at undertrykke advarslen
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Kopier din kode til containerens webroot
COPY . /var/www/html

# Giv de nødvendige rettigheder til Apache
RUN chown -R www-data:www-data /var/www/html
