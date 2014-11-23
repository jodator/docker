FROM jodator/php-fpm-phalcon
MAINTAINER Maciej Gołaszewski <jodator@gmail.com>

RUN rm -f /etc/nginx/sites-enabled/*

ADD config/nginx/app.nginx /etc/nginx/sites-enabled/default

ADD src/ /app/src
ADD public/ /app/public
# ADD config /app/config

VOLUME [ "/app/data" ]
