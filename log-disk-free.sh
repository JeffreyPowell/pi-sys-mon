#!/bin/bash
#
#

RRDFILE="/home/pi/bin/sys/data/disk-free.rrd"

# create database if not exists
[ -f $RRDFILE ] || {
totalpoints=$(df | grep -v Filesystem | wc -l)
if [ $totalpoints -ne 6 ]; then echo "filesystem has changed"; break; fi

/usr/bin/rrdtool create $RRDFILE \
--step 60 \
--start now \
DS:data1:GAUGE:120:U:U \
RRA:AVERAGE:0.5:1:1400 \
RRA:AVERAGE:0.5:5:8640 \
RRA:AVERAGE:0.5:60:8760 \
DS:data2:GAUGE:120:U:U \
RRA:AVERAGE:0.5:1:1400 \
RRA:AVERAGE:0.5:5:8640 \
RRA:AVERAGE:0.5:60:8760 \
DS:data3:GAUGE:120:U:U \
RRA:AVERAGE:0.5:1:1400 \
RRA:AVERAGE:0.5:5:8640 \
RRA:AVERAGE:0.5:60:8760 \
DS:data4:GAUGE:120:U:U \
RRA:AVERAGE:0.5:1:1400 \
RRA:AVERAGE:0.5:5:8640 \
RRA:AVERAGE:0.5:60:8760 \
DS:data5:GAUGE:120:U:U \
RRA:AVERAGE:0.5:1:1400 \
RRA:AVERAGE:0.5:5:8640 \
RRA:AVERAGE:0.5:60:8760 \
DS:data6:GAUGE:120:U:U \
RRA:AVERAGE:0.5:1:1400 \
RRA:AVERAGE:0.5:5:8640 \
RRA:AVERAGE:0.5:60:8760
}

DATA=$(df | grep -v Filesystem | wc -l)

DATA1=$( df | grep -v Filesystem | head -1 | tail -1 | sed "s/.* \([0-9]*\)\% \/.*/\1/" )
DATA2=$( df | grep -v Filesystem | head -2 | tail -1 | sed "s/.* \([0-9]*\)\% \/.*/\1/" )
DATA3=$( df | grep -v Filesystem | head -3 | tail -1 | sed "s/.* \([0-9]*\)\% \/.*/\1/" )
DATA4=$( df | grep -v Filesystem | head -4 | tail -1 | sed "s/.* \([0-9]*\)\% \/.*/\1/" )
DATA5=$( df | grep -v Filesystem | head -5 | tail -1 | sed "s/.* \([0-9]*\)\% \/.*/\1/" )
DATA6=$( df | grep -v Filesystem | head -6 | tail -1 | sed "s/.* \([0-9]*\)\% \/.*/\1/" )

#echo $DATA

/usr/bin/rrdtool update $RRDFILE `date +"%s"`:$DATA1:$DATA2:$DATA3:$DATA4:$DATA5:$DATA6
