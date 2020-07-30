# upload files to server using ssh & rsync
#
# Parameter: $1 -> remote connection including user, host, path;
# Parameter: $2 -> SourceFolder
# Parameter: $3 -> Key
# Parameter: $4 -> KnownHost


mkdir ~/.ssh
echo "$4" > ~/.ssh/known_hosts
chmod 700 ~/.ssh && chmod 644 ~/.ssh/known_hosts
eval "$(ssh-agent -s)"
ssh-add - <<< "$3"
rsync -a "$2" -e ssh "$1" # {USER}@{HOST}:{PATH}
echo "ssh {$1:HOST} 'rm {$1:PATH}; {$1:PARENT/$2} {$1:PATH}'"