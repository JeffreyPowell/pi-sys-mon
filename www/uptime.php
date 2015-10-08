<?php

create_graph("images/uptime-1h.png", "-1h", "Uptime");
create_graph("images/uptime-1d.png", "-1d", "Uptime");
create_graph("images/uptime-1w.png", "-1w", "Uptime");
create_graph("images/uptime-1m.png", "-1m", "Uptime");

echo "<html><head>";
echo "<meta http-equiv=\"refresh\" content=\"30\">";
echo "</head><body bgcolor='#080808'>";
echo "<img src='images/uptime-1h.png' border ='5'>";
echo "<img src='images/uptime-1d.png' border ='5'>";
echo "<img src='images/uptime-1w.png' border ='5'>";
echo "<img src='images/uptime-1m.png' border ='5'>";
echo "</body></html>";

exit;

function create_graph($output, $start, $title) {

  $options = array(
    "--slope-mode",
    "--start", $start,
    "--title=$title",
    "--vertical-label=Time (days)",
#    "--lower=0",
    "--height=200",
    "--width=370",
    "-cBACK#161616",
    "-cCANVAS#1E1E1E",
    "-cSHADEA#00000088",
    "-cSHADEB#00000044",
    "-cFONT#C7C7C7",
    "-cGRID#88880088",
    "-cMGRID#FFFFFF88",
    "-cFRAME#00FF00",
    "-cARROW#00000000",
    "-nTITLE:9",
    "-nAXIS:6",
    "-nUNIT:8",
#    "-y 0.25:1",
    "DEF:a=/home/pi/bin/sys/data/data_uptime.rrd:data:MAX",
    "CDEF:b=a,1,*",
#    "LINE4:b#00FF00:Days",
    "AREA:b#AAAAAA44",
    "LINE1:b#AAAAAA",
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
