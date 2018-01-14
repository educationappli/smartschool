#!/usr/bin/env bash

# nginx
sudo apt-get -y install nginx
sudo service nginx start

# set up nginx server
sudo cp -p /vagrant/nginx/nginx.conf /etc/nginx/sites-available/site.conf
sudo chmod 644 /etc/nginx/sites-available/site.conf

if [ -L /etc/nginx/sites-enabled/site.conf ]
then
  rm -f /etc/nginx/sites-enabled/site.conf
fi
sudo ln -s /etc/nginx/sites-available/site.conf /etc/nginx/sites-enabled/site.conf
sudo service nginx restart

if [ ! -L /var/www ]
then
  # clean /var/www
  sudo rm -Rf /var/www

  # symlink /var/www => /vagrant
  ln -s /vagrant/html /var/www
fi

if [ ! "$(docker network ls | grep smartschool_net)" ]
then
  docker network create smartschool_net
fi 

if [ ! "$(docker network inspect smartschool_net | grep webapp)" ]
then
  docker network connect smartschool_net webapp
fi

if [ ! "$(docker network inspect smartschool_net | grep database)" ]
then
  docker network connect smartschool_net database
fi

docker exec -it webapp bash -c 'cd /var/www/site/smartschool ; php artisan migrate:refresh --seed'
docker exec -it database mysql -e "GRANT ALL PRIVILEGES ON smartschool.* TO smartschool@'%' IDENTIFIED BY 'sm@rtsch00l' WITH GRANT OPTION"
