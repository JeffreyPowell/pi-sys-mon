<?php

$height="100";
$width="200";

$colcpuloadline="EEEE00FF"; $colcpuloadarea="EEEE0020";

$colcputempline="FF0000FF"; $colcputemparea="FF000008";

$colmemfreeline="00FF00FF"; $colmemfreearea="AAFFAA20";

$coldfl1="CC0066FF"; $coldfa1="CC006620";
$coldfl2="FF9900FF"; $coldfa2="FF990020";
$coldfl3="009900FF"; $coldfa3="00990020";
$coldfl4="000099FF"; $coldfa4="00009920";
$coldfl5="0000FFFF"; $coldfa5="0000FF20";
$coldfl6="CC00FFFF"; $coldfa6="CC00FF20";

$coluptimeline="888888FF"; $coluptimearea="88888820";

$colpingline="4444FFFF"; $colpingarea="4444FF20";

#create_graph1("cpu-load", "images/d-cpu-load-1h.png", "-1h", "CPU Load",    "%",      "AVERAGE", $width, $height, $colcpuloadline, $colcpuloadarea);
create_graph1("cpu-load", "images/d-cpu-load-1d.png", "-1d", "CPU Load",    "%",      "AVERAGE", $width, $height, $colcpuloadline, $colcpuloadarea);
create_graph1("cpu-load", "images/d-cpu-load-1w.png", "-1w", "CPU Load",    "%",      "AVERAGE", $width, $height, $colcpuloadline, $colcpuloadarea);
create_graph1("cpu-load", "images/d-cpu-load-1m.png", "-1m", "CPU Load",    "%",      "AVERAGE", $width, $height, $colcpuloadline, $colcpuloadarea);
#create_graph1("cpu-load", "images/d-cpu-load-1m.png", "-1y", "CPU Load",    "%",      "AVERAGE", $width, $height, $colcpuloadline, $colcpuloadarea);

#create_graph1("cpu-temp", "images/d-cpu-temp-1h.png", "-1h", "CPU Temp",    "Deg. C", "AVERAGE", $width, $height, $colcputempline, $colcputemparea);
create_graph1("cpu-temp", "images/d-cpu-temp-1d.png", "-1d", "CPU Temp",    "Deg. C", "AVERAGE", $width, $height, $colcputempline, $colcputemparea);
create_graph1("cpu-temp", "images/d-cpu-temp-1w.png", "-1w", "CPU Temp",    "Deg. C", "AVERAGE", $width, $height, $colcputempline, $colcputemparea);
create_graph1("cpu-temp", "images/d-cpu-temp-1m.png", "-1m", "CPU Temp",    "Deg. C", "AVERAGE", $width, $height, $colcputempline, $colcputemparea);
#create_graph1("cpu-temp", "images/d-cpu-temp-1m.png", "-1y", "CPU Temp",    "Deg. C", "AVERAGE", $width, $height, $colcputempline, $colcputemparea);

#create_graph1("mem-free", "images/d-mem-free-1h.png", "-1h", "Free Memory", "% free", "AVERAGE", $width, $height, $colmemfreeline, $colmemfreearea);
create_graph1("mem-free", "images/d-mem-free-1d.png", "-1d", "Free Memory", "% free", "AVERAGE", $width, $height, "00FF00", "AAFFAA80");
create_graph1("mem-free", "images/d-mem-free-1w.png", "-1w", "Free Memory", "% free", "AVERAGE", $width, $height, "00FF00", "AAFFAA80");
create_graph1("mem-free", "images/d-mem-free-1m.png", "-1m", "Free Memory", "% free", "AVERAGE", $width, $height, "00FF00", "AAFFAA80");

#create_graph6("disk-free", "images/d-disk-free-1h.png", "-1h", "/        ","/dev     ","/run     ","/run/lock","/run/shm ","/boot    ", "use %", "AVERAGE", $width, $height, $coldfl1, $coldfa1, $coldfl2, $coldfa2, $coldfl3, $coldfa3, $coldfl4, $coldfa4, $coldfl5, $coldfa5, $coldfl6, $coldfa6);
create_graph6("disk-free", "images/d-disk-free-1d.png", "-1d", "/        ","/dev     ","/run     ","/run/lock","/run/shm ","/boot    ", "use %", "AVERAGE", $width, $height, $coldfl1, $coldfa1, $coldfl2, $coldfa2, $coldfl3, $coldfa3, $coldfl4, $coldfa4, $coldfl5, $coldfa5, $coldfl6, $coldfa6);
create_graph6("disk-free", "images/d-disk-free-1w.png", "-1w", "/        ","/dev     ","/run     ","/run/lock","/run/shm ","/boot    ", "use %", "AVERAGE", $width, $height, $coldfl1, $coldfa1, $coldfl2, $coldfa2, $coldfl3, $coldfa3, $coldfl4, $coldfa4, $coldfl5, $coldfa5, $coldfl6, $coldfa6);
create_graph6("disk-free", "images/d-disk-free-1m.png", "-1m", "/        ","/dev     ","/run     ","/run/lock","/run/shm ","/boot    ", "use %", "AVERAGE", $width, $height, $coldfl1, $coldfa1, $coldfl2, $coldfa2, $coldfl3, $coldfa3, $coldfl4, $coldfa4, $coldfl5, $coldfa5, $coldfl6, $coldfa6);


#create_graph1("uptime",   "images/d-uptime-1h.png",   "-1h", "Uptime",      "Time (Hrs)", "MAX", $width, $height, $coluptimeline, $coluptimearea);
create_graph1("uptime",   "images/d-uptime-1d.png",   "-1d", "Uptime",      "Time (Hrs)", "MAX", $width, $height, $coluptimeline, $coluptimearea);
create_graph1("uptime",   "images/d-uptime-1w.png",   "-1w", "Uptime",      "Time (Hrs)", "MAX", $width, $height, $coluptimeline, $coluptimearea);
create_graph1("uptime",   "images/d-uptime-1m.png",   "-1m", "Uptime",      "Time (Hrs)", "MAX", $width, $height, $coluptimeline, $coluptimearea);
#create_graph1("uptime",   "images/d-uptime-1m.png",   "-1y", "Uptime",      "Time (Hrs)", "MAX", $width, $height, $coluptimeline, $coluptimearea);

#create_graph1("ping", "images/d-ping-1h.png", "-1h", "Ping",    "ms",      "AVERAGE", $width, $height, $colpingline, $colpingarea);
create_graph1("ping", "images/d-ping-1d.png", "-1d", "Ping",    "ms",      "AVERAGE", $width, $height, $colpingline, $colpingarea);
create_graph1("ping", "images/d-ping-1w.png", "-1w", "Ping",    "ms",      "AVERAGE", $width, $height, $colpingline, $colpingarea);
create_graph1("ping", "images/d-ping-1m.png", "-1m", "Ping",    "ms",      "AVERAGE", $width, $height, $colpingline, $colpingarea);
#create_graph1("ping", "images/d-ping-1m.png", "-1y", "Ping",    "ms",      "AVERAGE", $width, $height, $colpingline, $colpingarea);

echo "<html><head>";
echo "<meta http-equiv=\"refresh\" content=\"30\">";
echo "</head><body bgcolor='#FAFAFA'>";
echo "<table style='font-family:helvetica;font-size:16px;color:grey;'>";
echo "<tr><td>CPU Load</td></tr>";
echo "<tr style='background:#F4F8F8;'>";
#echo "<td><img src='images/d-cpu-load-1h.png'></td>";
echo "<td><img src='images/d-cpu-load-1d.png'></td>";
echo "<td><img src='images/d-cpu-load-1w.png'></td>";
echo "<td><img src='images/d-cpu-load-1m.png'></td>";
echo "</tr>";
echo "<tr><td>CPU Temperature</td></tr>";
echo "<tr>";
#echo "<td><img src='images/d-cpu-temp-1h.png'></td>";
echo "<td><img src='images/d-cpu-temp-1d.png'></td>";
echo "<td><img src='images/d-cpu-temp-1w.png'></td>";
echo "<td><img src='images/d-cpu-temp-1m.png'></td>";
echo "</tr>";
echo "<tr><td>Memory</td></tr>";
echo "<tr style='background:#F4F8F8;'>";
#echo "<td><img src='images/d-mem-free-1h.png'></td>";
echo "<td><img src='images/d-mem-free-1d.png'></td>";
echo "<td><img src='images/d-mem-free-1w.png'></td>";
echo "<td><img src='images/d-mem-free-1m.png'></td>";
echo "</tr>";
echo "<tr><td>Storage</td></tr>";
echo "<tr>";
#echo "<td><img src='images/d-disk-free-1h.png'></td>";
echo "<td><img src='images/d-disk-free-1d.png'></td>";
echo "<td><img src='images/d-disk-free-1w.png'></td>";
echo "<td><img src='images/d-disk-free-1m.png'></td>";
echo "</tr>";
echo "<tr><td>Uptime</td></tr>";
echo "<tr style='background:#F4F8F8;'>";
#echo "<td><img src='images/d-uptime-1h.png'></td>";
echo "<td><img src='images/d-uptime-1d.png'></td>";
echo "<td><img src='images/d-uptime-1w.png'></td>";
echo "<td><img src='images/d-uptime-1m.png'></td>";
echo "</tr>";

echo "<tr><td>Ping</td></tr>";
echo "<tr>";
#echo "<td><img src='images/d-ping-1h.png'></td>";
echo "<td><img src='images/d-ping-1d.png'></td>";
echo "<td><img src='images/d-ping-1w.png'></td>";
echo "<td><img src='images/d-ping-1m.png'></td>";
echo "</tr>";

echo "</table>";
echo "</body></html>";

exit;

function create_graph1($datafile, $output, $start, $dataname, $dataunit, $datacf, $width, $height, $linecol, $areacol) {

$linewidth=1.5;

$vertaxislabelpt=6;
$allaxisvaluept=6;
$legendpt=6;

  $options = array(
#    "--alt-autoscale",
#    "--slope-mode",
    "--start", $start,
#    "--title=$title",
    "--vertical-label=$dataunit",
#    "--lower=0",
    "--height=$height",
    "--width=$width",
    "-cBACK#EEEEEE00", 
    "-cSHADEA#EEEEEE00", 
    "-cSHADEB#EEEEEE00",
    "-cFONT#000000", 
    "-cCANVAS#FFFFFF00",
    "-cGRID#a5a5a5",
    "-cMGRID#FF9999",
    "-cFRAME#5e5e5e",
    "-cARROW#5e5e5e",
#    "-R normal",
    "-nTITLE:9",
    "-nLEGEND:$legendpt",
    "-nAXIS:$allaxisvaluept",
    "-nUNIT:$vertaxislabelpt",
    "DEF:a=/home/pi/bin/sys/data/$datafile.rrd:data:$datacf",
    "CDEF:b=a,1,*",
    "AREA:b#$areacol",
    "LINE$linewidth:b#$linecol:$dataname",
#    "COMMENT:\\n",
    "GPRINT:b:MIN:min %6.2lf",
    "GPRINT:b:MAX:max %6.2lf\\n"
);

 $ret = rrd_graph($output, $options);
  if (! $ret) {
    echo "<b>Graph error: </b>".rrd_error()."\n";
  }
}

function create_graph6($datafile, $output, $start, $dataname1, $dataname2, $dataname3, $dataname4, $dataname5, $dataname6, $dataunit, $datacf, $width, $height, $linecol1, $areacol1, $linecol2, $areacol2, $linecol3, $areacol3, $linecol4, $areacol4, $linecol5, $areacol5, $linecol6, $areacol6) {

$linewidth=1.5;

$vertaxislabelpt=6;
$allaxisvaluept=6;
$legendpt=6;

  $options = array(
#    "--alt-autoscale",
#    "--slope-mode",
    "--start", $start,
#    "--title=$title",
    "--vertical-label=$dataunit",
#    "--lower=0",
    "--height=$height",
    "--width=$width",
    "-cBACK#EEEEEE00",
    "-cSHADEA#EEEEEE00",
    "-cSHADEB#EEEEEE00",
    "-cFONT#000000",
    "-cCANVAS#FFFFFF00",
    "-cGRID#a5a5a5",
    "-cMGRID#FF9999",
    "-cFRAME#5e5e5e",
    "-cARROW#5e5e5e",
#    "-R normal",
    "-nTITLE:9",
    "-nLEGEND:$legendpt",
    "-nAXIS:$allaxisvaluept",
    "-nUNIT:$vertaxislabelpt",
    "DEF:a1=/home/pi/bin/sys/data/$datafile.rrd:data1:$datacf",
    "CDEF:b1=a1,1,*",
    "AREA:b1#$areacol1",
    "LINE$linewidth:b1#$linecol1:$dataname1",
#    "COMMENT:\\n",
    "GPRINT:b1:MIN:min %6.2lf",
    "GPRINT:b1:MAX:max %6.2lf\\n",

    "DEF:a2=/home/pi/bin/sys/data/$datafile.rrd:data2:$datacf",
    "CDEF:b2=a2,1,*",
    "AREA:b2#$areacol2",
    "LINE$linewidth:b2#$linecol2:$dataname2",
#    "COMMENT:\\n",
    "GPRINT:b2:MIN:min %6.2lf",
    "GPRINT:b2:MAX:max %6.2lf\\n",

    "DEF:a3=/home/pi/bin/sys/data/$datafile.rrd:data3:$datacf",
    "CDEF:b3=a3,1,*",
    "AREA:b3#$areacol3",
    "LINE$linewidth:b3#$linecol3:$dataname3",
#    "COMMENT:\\n",
    "GPRINT:b3:MIN:min %6.2lf",
    "GPRINT:b3:MAX:max %6.2lf\\n",

    "DEF:a4=/home/pi/bin/sys/data/$datafile.rrd:data4:$datacf",
    "CDEF:b4=a4,1,*",
    "AREA:b4#$areacol4",
    "LINE$linewidth:b4#$linecol4:$dataname4",
#    "COMMENT:\\n",
    "GPRINT:b4:MIN:min %6.2lf",
    "GPRINT:b4:MAX:max %6.2lf\\n",

    "DEF:a5=/home/pi/bin/sys/data/$datafile.rrd:data5:$datacf",
    "CDEF:b5=a5,1,*",
    "AREA:b5#$areacol5",
    "LINE$linewidth:b5#$linecol5:$dataname5",
#    "COMMENT:\\n",
    "GPRINT:b5:MIN:min %6.2lf",
    "GPRINT:b5:MAX:max %6.2lf\\n",

    "DEF:a6=/home/pi/bin/sys/data/$datafile.rrd:data6:$datacf",
    "CDEF:b6=a6,1,*",
    "AREA:b6#$areacol6",
    "LINE$linewidth:b6#$linecol6:$dataname6",
#    "COMMENT:\\n",
    "GPRINT:b6:MIN:min %6.2lf",
    "GPRINT:b6:MAX:max %6.2lf\\n"
);

$ret = rrd_graph($output, $options);
  if (! $ret) {
    echo "<b>Graph error: </b>".rrd_error()."\n";
  }
}

?>
