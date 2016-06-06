#!/bin/bash
#
# update .rrd database with CPU temperature



FILENAME="/home/pi/bin/sys/data/sys-cputemps.rrd"
# create database if not exists
[ -f $FILENAME ] || {
/usr/bin/rrdtool create $FILENAME \
--step 60 \
--start now \
DS:data:GAUGE:120:U:U \
RRA:AVERAGE:0.5:1:1400 \
RRA:AVERAGE:0.5:5:8640 \
RRA:AVERAGE:0.5:60:8760
}

# read the temperature and convert “59234″ into “59.234″ (degrees celsius)
TEMPERATURE=`cat /sys/class/thermal/thermal_zone0/temp`

TEMPERATURE=`echo -n ${TEMPERATURE:0:2}; echo -n .; echo -n ${TEMPERATURE:2}`

/usr/bin/rrdtool update ~/bin/sys/data/cpu-temp.rrd `date +"%s"`:$TEMPERATURE
