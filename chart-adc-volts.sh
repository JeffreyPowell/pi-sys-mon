#!/bin/bash

/usr/bin/rrdtool graph /usr/local/scripts/git/pi-adc-mon/www/adc-volts-hour.png \
--start -1h \
--width 800 \
--height 400 \
DEF:chartdata=/usr/local/scripts/git/pi-adc-mon/data/adc-volts.rrd:data:AVERAGE \
LINE4:chartdata#AAFF00:"channel 1 (v)"

#/usr/bin/rrdtool graph /usr/local/scripts/git/pi-adc-mon/www/adc-volts-day2.png \
#--end midnight\
#--start end-1400 \
#--width 800 \
#--height 400 \
#DEF:day1=/usr/local/scripts/git/pi-adc-mon/data/adc-volts.rrd:data:AVERAGE \
#DEF:day2=/usr/local/scripts/git/pi-adc-mon/data/adc-volts.rrd:data:AVERAGE:start=end-1400:end=midnight-1400 \
#LINE4:day1#AAFF00:"channel 1 (v) today" \
#SHIFT:day2:1400 \
#LINE1:day2#00FFAA:"channel 1 (v) yest"


/usr/bin/rrdtool graph /usr/local/scripts/git/pi-adc-mon/www/adc-volts-day.png \
--start -1d \
--width 800 \
--height 400 \
DEF:chartdata=/usr/local/scripts/git/pi-adc-mon/data/adc-volts.rrd:data:AVERAGE \
LINE4:chartdata#00FF00:"channel 1 (v)"


