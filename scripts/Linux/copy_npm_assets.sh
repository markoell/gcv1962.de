#!/bin/bash

temp_dir=$(pwd)
script_path=$(dirname $(realpath $0))

project_path=$(realpath ${script_path}/../../)

mkdir -p ${project_path}/assets/vendors/bootstrap && rsync -rv ${project_path}/node_modules/bootstrap/dist/ ${project_path}/assets/vendors/bootstrap
mkdir -p ${project_path}/assets/vendors/jquery && rsync -rv ${project_path}/node_modules/jquery/dist/ ${project_path}/assets/vendors/jquery
mkdir -p ${project_path}/assets/vendors/popper && rsync -rv ${project_path}/node_modules/popper.js/dist/ ${project_path}/assets/vendors/popper
mkdir -p ${project_path}/assets/vendors/fontawesome-free && rsync -rv --include=css/*** --include=webfonts/*** --exclude=* ${project_path}/node_modules/@fortawesome/fontawesome-free/ ${project_path}/assets/vendors/fontawesome-free
mkdir -p ${project_path}/assets/vendors/cookieconsent && rsync -rv ${project_path}/node_modules/cookieconsent/src/ ${project_path}/assets/vendors/cookieconsent
mkdir -p ${project_path}/assets/vendors/photoswipe && rsync -rv ${project_path}/node_modules/photoswipe/dist/ ${project_path}/assets/vendors/photoswipe
mkdir -p ${project_path}/assets/vendors/waypoints && rsync -rv ${project_path}/node_modules/waypoints/lib/ ${project_path}/assets/vendors/waypoints
mkdir -p ${project_path}/assets/vendors/animate.css && rsync -rv ${project_path}/node_modules/animate.css/animate.min.css ${project_path}/assets/vendors/animate.css/