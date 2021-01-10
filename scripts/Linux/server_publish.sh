# upload files to server using ssh & rsync
#
# Parameter: $1 -> remote connection including user, host, path;  (ftp273539-2688012@webhosting78.1blu.de:www/testsub)
# Parameter: $2 -> SourceFolder
# Parameter: $3 -> Key
# Parameter: $4 -> KnownHost


# 1. copy build to server (tmp path): username, password, key, host, known hosts, target path
# 2. duplicate orig path
# 3. sync tmp with duplicate
# 4. set link (old) to curent active
# 5. reset target link to tmp
# 6. delete old


mkdir ~/.ssh
echo "$4" > ~/.ssh/known_hosts
chmod 700 ~/.ssh && chmod 644 ~/.ssh/known_hosts
eval "$(ssh-agent -s)"
ssh-add - <<< $3
rsync -a "$2/*" -e ssh "$1" # {USER}@{HOST}:{PATH}
echo "ssh {$1%:*} 'cd ${1#*:} &&  '"

# target = `basename ${1#*:}`
# dirname = `dirname ${1#*:}`