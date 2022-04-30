
# TECHACOS

DOCKER IMAGES WITH LAMP | MYSQL | MONGODB | XDEBUG
A local Dockerized environment running:
In Production Environment
. PHP
. MYSQL
. MONGODB

In Dev Environment
. PHP
. MYSQL
. MONGODB
. XDEBUG

SETUP
Reguire: MAC | Windows OS | EC2 Instance & Docker Installed on them.
```http
git clone https://github.com/leiione/lamp-mongo.git lamp-mongo>
```
For Production Environment
```http
docker-compose build
```
```http
docker-compose up
```
For Dev Environment

First remove the production container with following command
```http
docker-compose down
```
Build the Dev environment
```http
docker-compose -f docker-compose-dev.yml --build
```
```http
docker-compose -f docker-compose-dev.yml up
```
To configure XDEBUG with PHP Storm, follow the link
https://matthewsetter.com/setup-step-debugging-php-xdebug3-docker/


