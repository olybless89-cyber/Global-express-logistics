FROM php:8.2-apache

RUN apt-get update && apt-get install -y --no-install-recommends default-mysql-client \
    && docker-php-ext-install mysqli \
    && a2enmod rewrite headers \
    && echo 'ServerName localhost' > /etc/apache2/conf-enabled/servername.conf \
    && rm -rf /var/lib/apt/lists/*

RUN { \
      echo 'display_errors=Off'; \
      echo 'log_errors=On'; \
      echo 'error_reporting=E_ALL & ~E_DEPRECATED & ~E_NOTICE & ~E_WARNING'; \
      echo 'short_open_tag=On'; \
      echo 'upload_max_filesize=20M'; \
      echo 'post_max_size=25M'; \
    } > /usr/local/etc/php/conf.d/app.ini \
    && sed -ri 's!AllowOverride None!AllowOverride All!g' /etc/apache2/apache2.conf \
    && echo 'DirectoryIndex index.html index.php' > /etc/apache2/conf-enabled/dirindex.conf

COPY . /var/www/html/
RUN rm -rf /var/www/html/docker /var/www/html/Dockerfile /var/www/html/SQL \
    && chown -R www-data:www-data /var/www/html
COPY SQL/SQL.sql /docker/schema.sql
COPY docker/entrypoint.sh /usr/local/bin/app-entrypoint
RUN chmod +x /usr/local/bin/app-entrypoint

ENTRYPOINT ["app-entrypoint"]
CMD ["apache2-foreground"]
