#!/bin/bash

temp_dir=$(pwd)
script_path=$(dirname $(realpath $0))

cd ${script_path}/../../

#init submodules
git submodule init && git submodule update

#install composer libraries
composer install

#install npm libraries
npm install

#create additional folder which need write access
mkdir site/accounts/ && chmod o+w site/accounts
mkdir site/cache/ && chmod o+w site/cache
mkdir media/ && chmod o+w media

cd ${temp_dir}
