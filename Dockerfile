FROM wordpress:latest

# Ativar módulo rewrite do Apache
RUN a2enmod rewrite

# Instalar extensões PHP necessárias
RUN docker-php-ext-install pdo pdo_mysql

# Copiar tema para o diretório correto
COPY ./eduardo-theme /var/www/html/wp-content/themes/eduardo-theme

# Definir permissões
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html