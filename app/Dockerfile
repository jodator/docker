FROM jodator/phalcon

MAINTAINER Maciej Gołaszewski <jodator@gmail.com>

RUN rm -f /etc/nginx/sites-enabled/*

ADD config/nginx/app.nginx /etc/nginx/sites-enabled/default

ADD src/ /app/src
ADD public/ /app/public

VOLUME [ "/app/data" ]
