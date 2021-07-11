FROM centos:7
RUN yum install -y https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
RUN yum install -y http://rpms.remirepo.net/enterprise/remi-release-7.rpm && \
    yum install -y yum-utils && yum-config-manager --enable remi-php80
RUN yum -y install httpd php php-cli php-common \
    php-mcrypt php-gd php-curl php-mysql php-ldap \
    php-zip php-fileinfo php-fpm php-mysqlnd \
    php-devel php-mbstring php-curl php-xml php-pear php-bcmath php-json\
    wget unzip
VOLUME /var/www/html
WORKDIR /var/www/html
EXPOSE 80
CMD apachectl -DFOREGROUND
