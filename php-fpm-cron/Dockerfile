FROM jodator/php-fpm

MAINTAINER Maciej Gołaszewski <jodator@gmail.com>

RUN \
    apt-get update && \
    apt-get install -y cron

RUN \
    apt-get autoremove && \
    apt-get autoclean && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

ADD supervisord.conf /etc/supervisor/conf.d/cron.conf
