FROM ubuntu:18.04
MAINTAINER Adaclare Technologies <support@adaclare.com>

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install software-properties-common -y
RUN add-apt-repository ppa:ondrej/php -y
RUN apt-get update
COPY debconf.selections /tmp/
RUN debconf-set-selections /tmp/debconf.selections
RUN apt-get install -y zip unzip

RUN DEBIAN_FRONTEND=noninteractive apt-get install -y \
	php7.3 \
	php7.3-bz2 \
	php7.3-cgi \
	php7.3-cli \
	php7.3-common \
	php7.3-curl \
	php7.3-dev \
	php7.3-enchant \
	php7.3-fpm \
	php7.3-gd \
	php7.3-gmp \
	php7.3-imap \
	php7.3-interbase \
	php7.3-intl \
	php7.3-json \
	php7.3-ldap \
	php7.3-mbstring \
	php7.3-mysql \
	php7.3-odbc \
	php7.3-opcache \
	php7.3-pgsql \
	php7.3-phpdbg \
	php7.3-pspell \
	php7.3-readline \
	php7.3-recode \
	php7.3-snmp \
	php7.3-sqlite3 \
	php7.3-sybase \
	php7.3-tidy \
	php7.3-xmlrpc \
	php7.3-xsl \
	php7.3-zip
RUN DEBIAN_FRONTEND=noninteractive apt-get install apache2 libapache2-mod-php7.3 -y
RUN DEBIAN_FRONTEND=noninteractive apt-get install mariadb-common mariadb-server mariadb-client -y
RUN DEBIAN_FRONTEND=noninteractive apt-get install postfix -y
RUN DEBIAN_FRONTEND=noninteractive apt-get install git composer curl -y

ENV LOG_STDOUT **Boolean**
ENV LOG_STDERR **Boolean**
ENV LOG_LEVEL warn
ENV ALLOW_OVERRIDE All
ENV DATE_TIMEZONE UTC
ENV TERM dumb

COPY panel /var/www/html/
COPY run-docker.sh /usr/sbin/
COPY fixindex.html /var/www/html/index.html
RUN mkdir /var/www/html/cache
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install -d /var/www/html/

RUN a2enmod rewrite
RUN ln -s /usr/bin/nodejs /usr/bin/node
RUN chmod +x /usr/sbin/run-docker.sh
RUN chown -R www-data:www-data /var/www/html

VOLUME /var/www/html
VOLUME /var/log/httpd
VOLUME /var/lib/mysql
VOLUME /var/log/mysql
VOLUME /etc/apache2

EXPOSE 80
EXPOSE 443
EXPOSE 3306

CMD ["/usr/sbin/run-docker.sh"]

