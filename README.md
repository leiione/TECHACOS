
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
<git clone https://github.com/leiione/lamp-mongo.git lamp-mongo>

For Production Environment
<docker-compose build>
<docker-compose up>

For Dev Environment
<docker-compose -f docker-compose-dev.yml --build>
<docker-compose -f docker-compose-dev.yml up>

To configure XDEBUG with PHP Storm, following the link below.
https://matthewsetter.com/setup-step-debugging-php-xdebug3-docker/



## 🔗 Links
git clone https://github.com/leiione/lamp-mongo.git lamp-mongo