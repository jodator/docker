FROM debian:wheezy

# Configure dotdeb

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && apt-get install -y wget

RUN wget -qO - http://www.dotdeb.org/dotdeb.gpg | apt-key add -

ADD dotdeb.list /etc/apt/sources.list.d/doteb.list
