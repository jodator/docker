FROM jodator/debian-dotdeb
MAINTAINER Maciej Gołaszewski <jodator@gmail.com>

# Install nginx.

ENV DEBIAN_FRONTEND noninteractive

RUN \
    apt-get update && \
    apt-get install -y nginx && \
    echo "\ndaemon off;" >> /etc/nginx/nginx.conf && \
    rm -rf /var/lib/apt/lists/* && \
    chown -R www-data:www-data /var/lib/nginx

RUN rm -rf /etc/nginx/*.d
RUN rm -rf /etc/nginx/sites-enabled/*
RUN mkdir -p /etc/nginx/addon.d /etc/nginx/conf.d /etc/nginx/host.d /etc/nginx/nginx.d

ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/nginx.conf

# Expose ports.
EXPOSE 80
EXPOSE 443

