#!/usr/bin/env bash

# nginx
sudo apt-get -y install nginx
sudo service nginx start

# set up nginx server
sudo cp -p /vagrant/nginx/nginx.conf /etc/nginx/sites-available/site.conf
sudo chmod 644 /etc/nginx/sites-available/site.conf
sudo ln -s /etc/nginx/sites-available/site.conf /etc/nginx/sites-enabled/site.conf
sudo service nginx restart

# clean /var/www
sudo rm -Rf /var/www

# symlink /var/www => /vagrant
ln -s /vagrant/html /var/www


docker exec -it webapp bash -c 'cd /var/www/site/smartschool ; php artisan migrate:refresh --seed'
docker exec -it database mysql -e "GRANT ALL PRIVILEGES ON smartschool.* TO smartschool@'%' IDENTIFIED BY 'sm@rtsch00l' WITH GRANT OPTION"
