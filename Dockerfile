FROM php:8.0-cli
WORKDIR /var/www/html
COPY . .
EXPOSE 80