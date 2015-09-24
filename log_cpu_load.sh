#!/bin/bash
#
#

# create database if not exists
[ -f ~/bin/sys/data/data_cpu_load.rrd ] || {
/usr/bin/rrdtool create ~/bin/sys/data/data_cpu_load.rrd \
--step 60 \
--start now \
DS:load:GAUGE:120:U:U \
RRA:AVERAGE:0.5:1:1400 \
RRA:AVERAGE:0.5:5:8640 \
RRA:AVERAGE:0.5:60:8760
}

LOAD=$( top -bn1 | grep "Cpu(s)" | sed "s/.*, *\([0-9.]*\)%* id.*/\1/" | awk '{print 100 - $1}')

/usr/bin/rrdtool update ~/bin/sys/data/data_cpu_load.rrd `date +"%s"`:$LOAD
