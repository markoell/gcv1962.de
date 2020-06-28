#!/bin/bash

#############################################
#
#	Update Submodules
#
#############################################

temp_dir=$(pwd)
script_path=$(dirname $(realpath $0))

cd ${script_path}/../../

#update all submodules
#git submodule update --init --recursive

#--- Update ---------------------------------
git submodule foreach --recursive git checkout master
git submodule foreach --recursive git pull

#--- Update Composer ------------------------

composer update

#--- Update NPM ------------------------

npm update && /bin/bash ${script_path}/copy_npm_assets.sh

#--- Checkin --------------------------------
git add -A
git commit -am "Kirby & Tools Update"
#git push

cd ${temp_dir}
