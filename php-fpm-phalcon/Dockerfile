FROM jodator/nginx
MAINTAINER Maciej Gołaszewski <jodator@gmail.com>

ENV DEBIAN_FRONTEND noninteractive

RUN \
    apt-get update && \
    apt-get install -y \
        php5-fpm php5-apc php5-cli php5-common php5-curl php5-dev php5-gd php5-http \
        php5-imagick php5-intl php5-mcrypt php5-memcache php5-mysql php5-tidy

RUN apt-get install -y procps

RUN sed -i '/daemonize /c daemonize = no' /etc/php5/fpm/php-fpm.conf
RUN sed -i '/^listen /c listen = 0.0.0.0:9000' /etc/php5/fpm/pool.d/www.conf

RUN rm -rf /etc/php5/cli/php.ini && \
    ln -s /etc/php5/fpm/php.ini /etc/php5/cli/php.ini

RUN apt-get autoremove && \
    apt-get autoclean && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# RUN rm -rf /etc/nginx/addon.d /etc/php5/fpm/pool.d
# RUN mkdir -p /etc/nginx/addon.d /etc/php5/fpm/pool.d

ADD etc /etc
ADD supervisord.conf /etc/supervisor/conf.d/php-fpm.conf
