FROM jodator/nginx
MAINTAINER Maciej Gołaszewski <jodator@gmail.com>

ENV DEBIAN_FRONTEND noninteractive

RUN \
    apt-get update && \
    apt-get install -y \
        php5-fpm php5-apc php5-cli php5-common php5-curl php5-dev php5-gd php5-http \
        php5-imagick php5-intl php5-mcrypt php5-memcache php5-mysql php5-tidy make

RUN rm -rf /etc/php5/cli/php.ini && \
    ln -s /etc/php5/fpm/php.ini /etc/php5/cli/php.ini

RUN apt-get autoremove && \
    apt-get autoclean && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN cd /tmp && \
    wget https://github.com/phalcon/cphalcon/archive/phalcon-v1.3.4.tar.gz && \
    tar xvf phalcon-v1.3.4.tar.gz && \
    cd cphalcon-phalcon-v1.3.4/build && \
    ./install

# RUN rm -rf /etc/nginx/addon.d /etc/php5/fpm/pool.d
# RUN mkdir -p /etc/nginx/addon.d /etc/php5/fpm/pool.d

ADD etc /etc
ADD 30-phalcon.ini /etc/php5/conf.d/30-phalcon.ini
ADD supervisord.conf /etc/supervisor/conf.d/php-fpm.conf
