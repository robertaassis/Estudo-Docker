FROM php:8-apache

WORKDIR /var/www/html/

COPY . .
 
EXPOSE 80 
# sempre usar essa porta do expose (80) quando for dar docker run. Ex: docker run -d -p 150:80 id_imagem. Vai rodar essa imagem na porta 150
RUN chown -R www-data:www-data /var/www

