<?php

create_graph("images/cpu_temp_hour.png",  "-1h", "CPU Temperature last hour");
create_graph("images/cpu_temp_day.png",   "-1d", "CPU Temperature last day");
create_graph("images/cpu_temp_week.png",  "-1w", "CPU Temperature last week");
create_graph("images/cpu_temp_month.png", "-1m", "CPU Temperature last month");

echo "<html><head>";
#echo "<style> div.outer {display:block; margin-left:auto; margin-right:auto;}</style>";
echo "<meta http-equiv=\"refresh\" content=\"30\">";
echo "</head><body bgcolor='#000000'>";
echo "<img src='images/cpu_temp_hour.png'  border ='5'>";
echo "<img src='images/cpu_temp_day.png'   border ='5'>";
echo "<img src='images/cpu_temp_week.png'  border ='5'>";
echo "<img src='images/cpu_temp_month.png' border ='5'>";
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
    "DEF:a=/home/pi/bin/sys/data/data_cpu_temp.rrd:temp:AVERAGE",
    "CDEF:b=a,1,*",
    "LINE4:b#00FF00:CPU temp",
    "AREA:b#AAFFAA",
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
