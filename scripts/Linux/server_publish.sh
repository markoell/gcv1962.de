# upload files to server using ssh & rsync
#
# Parameter: $1 -> remote connection including user, host, path;
# Parameter: $2 -> SourceFolder
# Parameter: $3 -> TargetPath
# Parameter: $4 -> Key
# Parameter: $5 -> KnownHost


mkdir ~/.ssh
echo "$4" > ~/.ssh/known_hosts
chmod 700 ~/.ssh && chmod 644 ~/.ssh/known_hosts
eval "$(ssh-agent -s)"
ssh-add - <<< "$3"
rsync -a "$2" -e ssh "$1" # {USER}@{HOST}:{PATH}
echo "ssh {$1%:*} 'cd ${1#*:} &&  '"

# target = `basename ${1#*:}`
# dirname = `dirname ${1#*:}`