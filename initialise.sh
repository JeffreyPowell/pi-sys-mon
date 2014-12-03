#!/bin/bash

# apt-get install rrdtool

#/usr/bin/rrdtool create /usr/local/scripts/git/pi-sys-mon/cpu-temp.rrd \
#--step 60 \
#--start now \
#DS:data:GAUGE:120:0:U \
#RRA:AVERAGE:0.5:1:1400 \
#RRA:AVERAGE:0.5:5:8640 \
#RRA:AVERAGE:0.5:60:8760

#touch /usr/local/scripts/git/pi-sys-mon/cpu-temp-day.png
#ln -s /usr/local/scripts/git/pi-sys-mon/cpu-temp-day.png /var/www/cpu-temp-day.png

/usr/bin/rrdtool create /usr/local/scripts/git/pi-sys-mon/cpu-load.rrd \
--step 60 \
--start now \
DS:data:GAUGE:120:0:U \
RRA:AVERAGE:0.5:1:1400 \
RRA:AVERAGE:0.5:5:8640 \
RRA:AVERAGE:0.5:60:8760

touch /usr/local/scripts/git/pi-sys-mon/cpu-load-day.png
ln -s /usr/local/scripts/git/pi-sys-mon/cpu-load-day.png /var/www/cpu-load-day.png


