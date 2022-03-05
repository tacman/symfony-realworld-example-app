FROM registry.okami101.io/adr1enbe4udou1n/php-fpm:8.1

WORKDIR /var/www/html

COPY bin bin/
COPY config config/
COPY fixtures fixtures/
COPY migrations migrations/
COPY public public/
COPY src src/
COPY templates templates/
COPY translations translations/
COPY vendor vendor/
COPY .env composer.json composer.lock ./

EXPOSE 9000

CMD ["php-fpm"]
