#!/bin/bash

source=${1%/}
target=${2%/}
content=${3:-"content"}
config=${4:-"site/config"}
accounts=${5:-"site/accounts"}

rsync -a "${source}/${content%/}/*" "${target}/${content%/}/"
rsync -a "${source}/${config%/}/*" "${target}/${config%/}/"
rsync -a "${source}/${accounts%/}/*" "${target}/${accounts%/}/"

mv -f ${source} ${source}_`date -u --iso-8601=seconds`
ln -s ${target} ${source}
