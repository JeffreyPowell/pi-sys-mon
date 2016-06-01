#!/bin/bash
#
#

RRDFILE="/home/pi/bin/sys/data/sys-ping.rrd"

# create database if not exists
[ -f $RRDFILE ] || {
/usr/bin/rrdtool create $RRDFILE \
--step 60 \
--start now \
DS:data:GAUGE:120:U:U \
RRA:AVERAGE:0.5:1:1400 \
RRA:AVERAGE:0.5:5:8640 \
RRA:AVERAGE:0.5:60:8760 
}

DATA=$( ping -c3 -t120 8.8.8.8 2>/dev/null | grep bytes | tail -1 2>/dev/null | sed "s/.*time=\(.*\)ms/\1/" )

#echo $DATA

/usr/bin/rrdtool update $RRDFILE `date +"%s"`:$DATA
