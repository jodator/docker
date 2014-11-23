FROM jodator/nginx
MAINTAINER Maciej Gołaszewski <jodator@gmail.com>

RUN \
    apt-get update && \
    apt-get install -y php5-dev make

RUN apt-get autoremove && \
    apt-get autoclean && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN cd /tmp && \
    wget https://github.com/phalcon/cphalcon/archive/phalcon-v1.3.4.tar.gz && \
    tar xvf phalcon-v1.3.4.tar.gz && \
    cd cphalcon-phalcon-v1.3.4/build && \
    ./install

ADD 30-phalcon.ini /etc/php5/conf.d/30-phalcon.ini
