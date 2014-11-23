FROM debian:wheezy
MAINTAINER Maciej Gołaszewski <jodator@gmail.com>

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get upgrade -y
RUN apt-get update
RUN apt-get install -y wget ca-certificates inotify-tools supervisor

RUN wget -qO - http://www.dotdeb.org/dotdeb.gpg | apt-key add -

ADD dotdeb.list /etc/apt/sources.list.d/doteb.list

RUN apt-get clean

RUN mkdir /app
RUN mkdir /app/logs
RUN mkdir /app/conf
RUN mkdir /app/data
RUN mkdir /app/src
RUN mkdir /app/public
RUN mkdir /config

ADD loop /config/loop
RUN chmod +x /config/loop
CMD /config/loop
