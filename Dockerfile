FROM php:7.3.3-apache
RUN apt-get update \
      && apt-get install -y libpq-dev \
      && docker-php-ext-install pdo pgsql pdo_pgsql \
      && docker-php-ext-enable pdo pgsql pdo_pgsql
COPY git/botDroid/App /var/www/html
COPY git/botDroid/Config /var/www/html
COPY git/botDroid/piramide-uploader /var/www/html
COPY git/botDroid/tests /var/www/html
COPY git/botDroid/.travis.yml /var/www/html
COPY git/botDroid/composer.json /var/www/html
COPY git/botDroid/composer.lock /var/www/html
COPY git/botDroid/index.php /var/www/html
COPY git/botDroid/phpunit.xml.dist /var/www/html
COPY git/botDroid/vendor /var/www/html
EXPOSE 80
