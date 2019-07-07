FROM ubuntu:latest

ENV DEBIAN_FRONTEND=noninteractive 

RUN apt-get update 
RUN apt-get install -y apache2 php

COPY md5php.php /var/www/html

CMD apachectl -D FOREGROUND 
