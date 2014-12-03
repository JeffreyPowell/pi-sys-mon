#!/bin/bash

event=`date +"%s"`

TEMPERATURE=`cat /sys/class/thermal/thermal_zone0/temp`
TEMPERATURE=`echo -n ${TEMPERATURE:0:2}; echo -n .; echo -n ${TEMPERATURE:2}`

/usr/bin/rrdtool update /usr/local/scripts/git/pi-sys-mon/cpu-temp.rrd `date +"%s"`:$TEMPERATURE


