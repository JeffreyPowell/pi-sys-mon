#!/bin/bash

# apt-get install rrdtool


/usr/bin/rrdtool create /usr/local/scripts/git/pi-adc-mon/data/adc-volts.rrd \
--step 60 \
--start now \
DS:data:GAUGE:120:0:U \
RRA:AVERAGE:0.5:1:1400 \
RRA:AVERAGE:0.5:5:8640 \
RRA:AVERAGE:0.5:60:8760


ln -s /usr/local/scripts/git/pi-adc-mon/www /var/www/pi-adc-mon


