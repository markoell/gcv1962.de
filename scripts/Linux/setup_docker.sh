#!/bin/bash

# !!! Ensure to remove all container with name gcv1962-webpage !!!

script_path=$(dirname $(realpath $0))
image_tag="php:7.3-apache-stretch-rewrite"

#dockerize env
docker build -t ${image_tag} -f ${script_path}/Dockerfile .
docker run -d --name gcv1962-webpage -p 80:80 -v ${script_path}/../../:/var/www/html ${image_tag}
