#!/bin/bash

source_path=${1%/}
target_path=${2%/}
subpath=${3:-"publish"}

content=${4:-"content"}
config=${5:-"site/config"}
accounts=${6:-"site/accounts"}

working_dir=`dirname ${source_path}`
source_folder=`basename ${source_path}`
target_folder=`basename ${target_path}`"/${subpath}"

cd ${working_dir}

rsync -a "${source_folder}/${content}/" "${target_folder}/${content}/"
rsync -a "${source_folder}/${config}/" "${target_folder}/${config}/"
rsync -a "${source_folder}/${accounts}/" "${target_folder}/${accounts}/"

mv -f ${source_folder} ${source_folder}_`date -u --iso-8601=seconds`
ln -s ${target_folder} ${source_folder}
