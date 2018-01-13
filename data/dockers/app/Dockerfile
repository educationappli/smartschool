FROM ubuntu:16.04
MAINTAINER mizanur rahman <mrahmanjewel@gmail.com>

ENV REFRESHED_AT 2018-01-04
ENV HTTPD_PREFIX /etc/apache2

# Suppress warnings from apt about lack of Dialog
ENV DEBIAN_FRONTEND noninteractive

LABEL maintainer="mizanur rahman <mrahmanjewel@gmail.com>" \
      org.label-schema.docker.dockerfile="/Dockerfile" \
      org.label-schema.name="Ubuntu 16.04 with Apache2.4 and PHP 7" \
      org.label-schema.url="http://www.smartschool.com" \
      org.label-schema.vcs-url="https://github.com/mrahman/smartschool.git"

# Initial apt update
RUN apt-get update && apt-get install -y apt-utils

# Install common / shared packages
RUN apt-get install -y \
    curl \
    git \
    zip \
    unzip \
    vim \
    locales \
    software-properties-common \
    python-software-properties

# Set up locales
RUN locale-gen en_US.UTF-8
ENV LANG C.UTF-8
ENV LANGUAGE C.UTF-8
ENV LC_ALL C.UTF-8
RUN /usr/sbin/update-locale

# Install apache, PHP, and supplimentary programs. openssh-server, curl, and lynx-cur are for debugging the container.
RUN apt-get -y upgrade && apt-get -y install \
    apache2 php7.0 php7.0-mysql libapache2-mod-php7.0 curl lynx-cur

# Enable apache mods.
RUN a2enmod php7.0
RUN a2enmod rewrite

# Update the PHP.ini file, enable <? ?> tags and quieten logging.
RUN sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php/7.0/apache2/php.ini
RUN sed -i "s/error_reporting = .*$/error_reporting = E_ERROR | E_WARNING | E_PARSE/" /etc/php/7.0/apache2/php.ini

# Manually set up the apache environment variables
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

# Expose apache.
EXPOSE 80

# Clone the source repo into place.

RUN apt-get -y install git php-mbstring php-xml \
    && mkdir -p /var/www/site \
    && echo "Options -Indexes" > /var/www/site/.htaccess \
    && cd /var/www/site \
    && git clone -b develop https://github.com/educationappli/webapp.git \
    && mkdir -p /tmp/composer \
    && cd /tmp/composer \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && cd /var/www/site/smartschool \
    && php /tmp/composer/composer.phar install \
    && rm -rf /tmp/composer

COPY .env /var/www/site/smartschool/.env

# Update the default apache site with the config we created.
ADD apache-config.conf /etc/apache2/sites-enabled/000-default.conf
ADD smartschool.conf /etc/apache2/sites-available/smartschool.conf
RUN chown -R www-data:www-data /var/www/site/smartschool/storage \
    && chown -R www-data:www-data /var/www/site/smartschool/bootstrap/cache \
    && a2ensite smartschool

# By default start up apache in the foreground, override with /bin/bash for interative.
CMD /usr/sbin/apache2ctl -D FOREGROUND
