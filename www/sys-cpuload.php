<?php

create_graph("images/cpuload-hour.png",  "-1h", "CPU Load last hour");
create_graph("images/cpuload-day.png",   "-1d", "CPU Load last day");
create_graph("images/cpuload-week.png",  "-1w", "CPU Load last week");
create_graph("images/cpuload-month.png", "-1m", "CPU Load last month");

echo "<html><head>";
#echo "<style> div.outer {display:block; margin-left:auto; margin-right:auto;}</style>";
echo "<meta http-equiv=\"refresh\" content=\"30\">";
echo "</head><body bgcolor='#000000'>";
echo "<img src='images/cpuload-hour.png'  border ='5'>";
echo "<img src='images/cpuload-day.png'   border ='5'>";
echo "<img src='images/cpuload-week.png'  border ='5'>";
echo "<img src='images/cpuload-month.png' border ='5'>";
echo "</body></html>";

exit;

function create_graph($output, $start, $title) {

  $options = array(
    "--slope-mode",
    "--start", $start,
    "--title=$title",
    "--vertical-label=Degrees (c)",
    "--lower=0",
    "--height=200",
    "--width=370",
    "DEF:a=/home/pi/bin/sys/data/sys-cpuload.rrd:data:AVERAGE",
    "CDEF:b=a,1,*",
    "LINE1:b#FF0000:CPU load",
 #   "AREA:b#AAFFAA",
    "COMMENT:\\n",
    "GPRINT:b:MIN:min %6.2lf",
    "GPRINT:b:MAX:max %6.2lf"

  );

 $ret = rrd_graph($output, $options);
  if (! $ret) {
    echo "<b>Graph error: </b>".rrd_error()."\n";
  }
}

?>
