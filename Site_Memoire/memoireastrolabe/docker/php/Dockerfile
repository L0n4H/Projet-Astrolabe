# docker/php/Dockerfile
FROM php:8.4-fpm

# Installation des dépendances système
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libzip-dev \
    sqlite3 \
    libsqlite3-dev

# Installation des extensions PHP
# Installation des extensions PHP
RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl zip

# Installation de PDO SQLite (on ignore l'erreur si c'est déjà intégré au cœur de l'image)
RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl zip pdo pdo_sqlite opcache
# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définition du répertoire de travail
WORKDIR /var/www/html