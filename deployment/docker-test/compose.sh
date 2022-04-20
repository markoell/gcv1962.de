rsync -av --exclude-from=deployment/online/rsync.ignore --exclude publish . deployment/docker-test/html/

docker-compose up -d