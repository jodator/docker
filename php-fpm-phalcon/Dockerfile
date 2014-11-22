FROM jodator/debian-dotdeb

# Install nginx.

ENV DEBIAN_FRONTEND noninteractive

RUN \
    apt-get update && \
    apt-get install -y \
        php5-fpm php5-apc php5-cli php5-common php5-curl php5-dev php5-gd php5-http \
        php5-imagick php5-intl php5-mcrypt php5-memcache php5-mysql php5-tidy

RUN sed -i '/daemonize /c daemonize = no' /etc/php5/fpm/php-fpm.conf
RUN sed -i '/^listen /c listen = 0.0.0.0:9000' /etc/php5/fpm/pool.d/www.conf

RUN rm -rf /etc/php5/cli/php.ini && \
    ln -s /etc/php5/fpm/php.ini /etc/php5/cli/php.ini

RUN echo "date.timezone= Europe/Paris" >>  /etc/php5/fpm/php.ini
RUN echo "phar.readonly = Off" >> /etc/php5/fpm/php.ini

CMD ["php5-fpm"]

EXPOSE 9000

RUN apt-get autoremove && \
    apt-get autoclean && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

VOLUME ["/var/www/"]
