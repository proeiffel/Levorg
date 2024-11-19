# PHP 8.2 imajını kullan
FROM php:8.2-apache

# Uygulama dosyalarını kopyala
COPY . /var/www/html

# Çalışma dizinini ayarla
WORKDIR /var/www/html

# Gerekli PHP eklentilerini yükle
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Yazma izinlerini ayarla (opsiyonel)
RUN chown -R www-data:www-data /var/www/html

# Apache mod_rewrite etkinleştir (opsiyonel)
RUN a2enmod rewrite
