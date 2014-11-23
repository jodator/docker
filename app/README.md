# Example PHP app

Docker file for example PHP app.

Example run command for built image.

    docker build -t app ./

    docker run -d -p 8001:80 --link mysql:db --name app -v /some/path/app-data:/app/data app

This assumes that `mysql` service is run. Example:

    docker run -d -p 3307:3306 -v /some/path/mysql/:/var/lib/mysql --name mysql tutum/mysql
