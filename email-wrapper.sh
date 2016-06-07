#!/bin/bash

# This needs heirloom-mailx
#from="jffrypwll@pi-van"
to="jffrypwll@googlemail.com"
subject="rpi-van sys"
body="Contents of /backups/*.tar.*"
declare -a attachments
attachments=($( ls /home/pi/bin/sys/www/images/*.png ))
#attachments={${ find /backups -maxdepth 1 -newermt $(date +%Y-%m-%d -d '1 day ago' ) -type f -print } }

declare -a attargs
for att in "${attachments[@]}"; do
  attargs+=( "-a"  "$att" )
done

mail -s "$subject" -r "$from" "${attargs[@]}" "$to" <<< "$body"
