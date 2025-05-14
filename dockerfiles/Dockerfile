#FROM almalinux

#RUN yum -y update
#RUN yum -y install httpd
#RUN yum -y install php
#RUN yum -y install php-fpm

#COPY ./index.php /var/www/html/index.php

#CMD ["/usr/sbin/httpd","-D","FOREGROUND"]

#RUN mkdir /run/php-fpm
#CMD ["/usr/sbin/php-fpm","-R","&&","/usr/sbin/httpd","-D","FOREGROUND"]

#EXPOSE 80

FROM php:7.2-apache
COPY ./index.php /var/www/html/index.php

EXPOSE 80
