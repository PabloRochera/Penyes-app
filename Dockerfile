# Usar la imagen base de PHP con FPM
FROM php:8.3-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid
RUN useradd -m -u ${uid} -s /bin/bash ${user}

# Actualizar APT, limpiar cachés y asegurarse de que los repositorios estén correctamente actualizados
RUN apt-get update && apt-get upgrade -y && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    unzip \
    git \
    curl \
    libonig-dev \
    libzip-dev \
    libicu-dev \
    libxml2-dev \
    libsqlite3-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl xml pdo_sqlite sqlite3

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear directorio de la aplicación
WORKDIR /var/www/html

# Copiar el proyecto Laravel en el contenedor
COPY . .

# Asignar permisos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Exponer puerto para la app
EXPOSE 9000

# Iniciar PHP-FPM
CMD ["php-fpm"]

USER ${user}
