#!/bin/bash

event=`date +"%s"`

idle=`vmstat 2 3 | tail -n1 | sed "s/\ \ */\ /g" | cut -d' ' -f 16`
cpu=$(( 100 - idle ))



/usr/bin/rrdtool update /usr/local/scripts/git/pi-sys-mon/cpu-load.rrd `date +"%s"`:$cpu


