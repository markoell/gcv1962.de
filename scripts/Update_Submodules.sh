#!/bin/bash

#############################################
#
#	Update Submodules
#
#############################################

#update all submodules
#git submodule update --init --recursive

#--- Update ---------------------------------
git submodule foreach --recursive git checkout master
git submodule foreach --recursive git pull

#--- Checkin --------------------------------
git add -A
git commit -am "Kirby Update"
#git push
