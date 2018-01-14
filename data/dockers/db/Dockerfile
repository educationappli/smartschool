FROM ubuntu:16.04
MAINTAINER mizanur rahman <mrahmanjewel@gmail.com>

ENV REFRESHED_AT 2018-01-04
ENV MYSQLD_PREFIX /etc/mysql

# Suppress warnings from apt about lack of Dialog
ENV DEBIAN_FRONTEND noninteractive

LABEL maintainer="mizanur rahman <mrahmanjewel@gmail.com>" \
      org.label-schema.docker.dockerfile="/Dockerfile" \
      org.label-schema.name="Ubuntu 16.04 with mysql 5.7" \
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

# Install MySQL.
RUN \
  apt-get update && \
  apt-get -y upgrade && \
  apt-get install -y mysql-server && \
  rm -rf /var/lib/apt/lists/* 

COPY mysqld.cnf /etc/mysql/mysql.conf.d/mysqld.cnf 

RUN \
  mkdir -p /var/run/mysqld && \
  chown -R mysql:mysql /var/run/mysqld && \
  chown -R mysql:mysql /var/lib/mysql

# Prepare Configuration for MySQL. 
#RUN \
#  echo "mysqld_safe &" > /tmp/config && \
#  echo "mysqladmin --silent --wait=30 ping || exit 1" >> /tmp/config && \
#  echo "mysql -e 'GRANT ALL PRIVILEGES ON *.* TO \"root\"@\"%\" WITH GRANT OPTION;'" >> /tmp/config && \
#  chmod +x /tmp/config

#RUN mysqld_safe & 
#RUN sleep 10s
#RUN mysqladmin --silent --wait=30 ping
#RUN mysql -e 'GRANT ALL PRIVILEGES ON *.* TO \"root\"@\"%\" WITH GRANT OPTION;'
  
# Execute MySQL Configuration
#RUN \
#  bash -c /tmp/config && \
#  rm -f /tmp/config

# Define mountable directories.
VOLUME ["/etc/mysql", "/var/lib/mysql"]

# Define working directory.
WORKDIR /data

# Define default command.
CMD ["mysqld_safe"]

# Expose ports.
EXPOSE 3306
