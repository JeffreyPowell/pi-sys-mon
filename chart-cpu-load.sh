#!/bin/bash

/usr/bin/rrdtool graph /var/www/cpu-load-day.png \
--start -1d \
--width 800 \
--height 400 \
DEF:chartdata=/usr/local/scripts/git/pi-sys-mon/cpu-load.rrd:data:AVERAGE \
AREA:chartdata#00FF00:"CPU load (%)"
