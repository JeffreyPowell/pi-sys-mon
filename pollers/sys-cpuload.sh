#!/bin/bash


FILENAME="/home/pi/bin/sys/data/sys-cpuload.rrd"
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

LOAD=$( top -bn3 | grep "Cpu(s)" | tail -1 | sed "s/.*, *\([0-9.]*\)%* id.*/\1/" | awk '{print 100 - $1}')

/usr/bin/rrdtool update $FILENAME `date +"%s"`:$LOAD
