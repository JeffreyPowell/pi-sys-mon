#!/bin/bash
#
#

RRDFILE="/home/pi/bin/sys/data/sys-memfree.rrd"

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

TOTAL=$( top -bn1 | grep "KiB Mem" | tail -1 | sed "s/.*: *\([0-9.]*\)%* total.*/\1/")

#echo $TOTAL

USED=$( top -bn1 | grep "KiB Mem" | tail -1 | sed "s/.*, *\([0-9.]*\)%* used.*/\1/")

#echo $USED

DATA=$( echo "100/(($TOTAL/$USED))" | bc -l )

#echo $DATA

/usr/bin/rrdtool update $RRDFILE `date +"%s"`:$DATA
