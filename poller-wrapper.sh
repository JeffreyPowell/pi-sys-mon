#!/bin/bash

/usr/bin/python /usr/local/scripts/git/pi-adc-mon/poll-adc-volts.py
/bin/bash /usr/local/scripts/git/pi-adc-mon/chart-adc-volts.sh

/bin/bash /usr/local/scripts/git/pi-sys-mon/pollers/poll-sys-uptime.sh
