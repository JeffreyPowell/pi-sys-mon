<?php

#echo "1";
create_graph("images/cpu_temp_hour.png", "-1h", "CPU Temp last hour");
#echo "2";
echo "<img src='images/cpu_temp_hour.png' alt='Generated RRD image'>";
#echo "3";

exit;

function create_graph($output, $start, $title) {
echo "a1";
  $options = array(
    "--slope-mode",
    "--start", $start,
    "--title=$title",
    "--vertical-label=Calls(av)",
    "--lower=0",
    "--height=200",
    "--width=500",
    "DEF:a=/home/pi/bin/sys/data/data_cpu_temp.rrd:temp:AVERAGE",
    "CDEF:b=a,1,*",
    "LINE4:b#00FF00:Degrees",
    "AREA:b#AAFFAA",
    "COMMENT:\\n",
    "GPRINT:b:AVERAGE:Calls %6.2lf"
  );
echo "a2";
 $ret = rrd_graph($output, $options);
  if (! $ret) {
    echo "<b>Graph error: </b>".rrd_error()."\n";
  }
}

?>
