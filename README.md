# Repository for Dockerfiles

All images are based on debian with dotdeb repository. Inspired by [maxexcloo/Docker](https://github.com/maxexcloo/Docker)

## Images:

* `jodator/app` - Example PHP application
* `jodator/debian-dotdeb` - base debian image
* `jodator/nginx` - nginx server
* `jodator/phalcon` - PHP 5.4 with phalconPHP installed
* `jodator/php-fpm` - base PHP 5.4 with FPM & CLI
* `jodator/php-fpm-cron` - PHP 5.4 with cron installed

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
