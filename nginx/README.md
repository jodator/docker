# Nginx

Docker file for nginx which can be used to run multiple websites.

Example run command for built image.

    docker run -d --name="nginx" \
        -v /home/jodator/dev/docker/filesys/etc/nginx/sites-enabled:/etc/nginx/sites-enabled \
        -v /home/jodator/dev/docker/filesys/var/log/nginx:/var/log/nginx \
        -v /home/jodator/dev/docker/filesys/var/www:/var/www \
        -v /home/jodator/dev/docker/filesys/etc/nginx/conf.d:/etc/nginx/conf.d \
        -p 80:80 \
        jodator/nginx 

It will create required folders in `/home/jodator/dev/docker/filesys/` directory for not messing with local filesystem.
