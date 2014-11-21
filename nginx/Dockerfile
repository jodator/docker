FROM jodator/debian-dotdeb

# Install nginx.

ENV DEBIAN_FRONTEND noninteractive

RUN \
    apt-get update && \
    apt-get install -y nginx && \
    echo "\ndaemon off;" >> /etc/nginx/nginx.conf && \
    rm -rf /var/lib/apt/lists/* && \
    chown -R www-data:www-data /var/lib/nginx

VOLUME ["/etc/nginx/sites-enabled", "/etc/nginx/certs", "/etc/nginx/conf.d", "/var/log/nginx", "/var/www/"]

# Define working directory.
WORKDIR /etc/nginx

# Define default command.
CMD ["nginx"]

# Expose ports.
EXPOSE 80
EXPOSE 443
