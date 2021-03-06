FROM node:10.1.0

EXPOSE 80
ENV BIND_HOST=0.0.0.0
CMD ["npm", "start"]
WORKDIR /usr/app

# Install a bunch of node modules that are commonly used.
ADD package.json /usr/app/
RUN yarn install

# Add default setup files.
ADD .babelrc server.js webpack.config.js /usr/app/
ADD cfg /usr/app/cfg



FROM php:5.6-apache

RUN apt-get update && apt-get install -y git-core cron \
  libjpeg-dev libmcrypt-dev libpng12-dev libpq-dev \
  && rm -rf /var/lib/apt/lists/* \
  && docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
  && docker-php-ext-install gd mcrypt mysqli opcache pdo pdo_mysql zip

# Recommended opcache settings - https://secure.php.net/manual/en/opcache.installation.php
RUN { \
    echo 'opcache.memory_consumption=128'; \
    echo 'opcache.interned_strings_buffer=8'; \
    echo 'opcache.max_accelerated_files=4000'; \
    echo 'opcache.revalidate_freq=2'; \
    echo 'opcache.fast_shutdown=1'; \
    echo 'opcache.enable_cli=1'; \
  } > /usr/local/etc/php/conf.d/docker-ci-opcache.ini

RUN { \
    echo 'log_errors=on'; \
    echo 'display_errors=off'; \
    echo 'upload_max_filesize=32M'; \
    echo 'post_max_size=32M'; \
    echo 'memory_limit=128M'; \
    echo 'date.timezone="UTC"'; \
  } > /usr/local/etc/php/conf.d/docker-ci-php.ini

RUN a2enmod rewrite

COPY ./CodeIgniter_1.7.3 /usr/src/CodeIgniter_1.7.3

RUN chown -R www-data:www-data /usr/src/CodeIgniter_1.7.3 && \
  mv /usr/src/CodeIgniter_1.7.3/system /var/www/codeigniter

COPY docker-entrypoint /usr/local/bin/

ENTRYPOINT ["docker-entrypoint"]
CMD ["apache2-foreground"]

