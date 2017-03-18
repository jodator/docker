FROM debian:wheezy

MAINTAINER Maciej Gołaszewski <jodator@gmail.com>

ENV DEBIAN_FRONTEND noninteractive

RUN \
    apt-get upgrade -y && \
    apt-get update && \
    apt-get install -y wget ca-certificates inotify-tools supervisor

RUN wget -qO - http://www.dotdeb.org/dotdeb.gpg | apt-key add -

ADD dotdeb.list /etc/apt/sources.list.d/doteb.list

RUN apt-get clean

RUN \
    mkdir -p /app/logs && \
    mkdir /app/conf && \
    mkdir /app/data && \
    mkdir /app/src && \
    mkdir /app/public && \
    mkdir /config

ADD loop /config/loop

RUN chmod +x /config/loop

CMD /config/loop
