FROM jodator/php-fpm

MAINTAINER Maciej Gołaszewski <jodator@gmail.com>

RUN \
    apt-get update && \
    apt-get install -y php5-dev libpcre3-dev gcc make

RUN \
    apt-get autoremove && \
    apt-get autoclean && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN \
    cd /tmp && \
    wget https://github.com/phalcon/cphalcon/archive/phalcon-v2.0.13.tar.gz && \
    tar xvf phalcon-v2.0.13.tar.gz && \
    cd cphalcon-phalcon-v2.0.13/build && \
    ./install

RUN rm -rf /tmp/cphalcon*

ADD 30-phalcon.ini /etc/php5/conf.d/30-phalcon.ini
