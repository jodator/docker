# Example PHP app

Docker file for example PHP app.

Example run command for built image.

    docker build -t jodator/app ./

    docker run -d -p 8001:80 --name="php-app" jodator/app
