#!/bin/bash -l

#init submodules
git submodule init && git submodule update

#install composer libraries
composer install

#install npm libraries
npm install

mkdir -p assets/vendors/bootstrap && rsync -rv node_modules/bootstrap/dist/ assets/vendors/bootstrap
mkdir -p assets/vendors/jquery && rsync -rv node_modules/jquery/dist/ assets/vendors/jquery
mkdir -p assets/vendors/popper && rsync -rv node_modules/popper.js/dist/ assets/vendors/popper
mkdir -p assets/vendors/fontawesome && rsync -rv node_modules/@fortawesome/fontawesome-free/ assets/vendors/fontawesome
mkdir -p assets/vendors/cookieconsent && rsync -rv node_modules/cookieconsent/src/ assets/vendors/cookieconsent
mkdir -p assets/vendors/photoswipe && rsync -rv node_modules/photoswipe/dist/ assets/vendors/photoswipe
mkdir -p assets/vendors/waypoints && rsync -rv node_modules/waypoints/lib/ assets/vendors/waypoints
mkdir -p assets/vendors/animate.css && rsync -rv node_modules/animate.css/animate.min.css assets/vendors/animate.css/

#create additional folder which need write access
mkdir site/accounts/ && chmod o+w site/accounts
mkdir site/cache/ && chmod o+w site/cache
mkdir media/ && chmod o+w media

#dockerize env
#docker build -t wiozt62l0n/php:7.3-apache-stretch-rewrite -f scripts/Dockerfile .
#docker run -d --rm -p 80:80 -v ${PWD}:/var/www/html wiozt62l0n/php:7.3-apache-stretch-rewrite