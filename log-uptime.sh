#!/bin/bash
#
#

RRDFILE="/home/pi/bin/sys/data/uptime.rrd"

# create database if not exists
[ -f $RRDFILE ] || {
/usr/bin/rrdtool create $RRDFILE \
--step 60 \
--start now \
DS:data:GAUGE:120:U:U \
RRA:MAX:0.5:1:1400 \
RRA:MAX:0.5:5:8640 \
RRA:MAX:0.5:60:8760
}

DATA=$( awk '{print $0/60/60/24;}' /proc/uptime )

#echo $DATA

/usr/bin/rrdtool update $RRDFILE `date +"%s"`:$DATA
