# Repository for Dockerfiles

All images are based on debian with dotdeb repository. Inspired by [maxexcloo/Docker](https://github.com/maxexcloo/Docker)

## Images:

* `jodator/debian-dotdeb` - base image
* `jodator/nginx` - nginx server
* `jodator/php-fpm-phalcon` - PHP 5.4 with phalconPHP installed

Site configuration

    /app
        src
        config
            nginx
            php
        logs
        public
            css
            img
            ...
        data
            external save
