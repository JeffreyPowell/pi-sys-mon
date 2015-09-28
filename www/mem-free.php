<?php

create_graph("images/mem-free-1h.png", "-1h", "Free Memory last hour");
create_graph("images/mem-free-1d.png", "-1d", "Free Memory last day");
create_graph("images/mem-free-1w.png", "-1w", "Free Memory last week");
create_graph("images/mem-free-1m.png", "-1m", "Free Memory last month");

echo "<html><head>";
#echo "<style> div.outer {display:block; margin-left:auto; margin-right:auto;}</style>";
echo "<meta http-equiv=\"refresh\" content=\"30\">";
echo "</head><body bgcolor='#000000'>";
echo "<img src='images/mem-free-1h.png' border ='5'>";
echo "<img src='images/mem-free-1d.png' border ='5'>";
echo "<img src='images/mem-free-1w.png' border ='5'>";
echo "<img src='images/mem-free-1m.png' border ='5'>";
echo "</body></html>";

exit;

function create_graph($output, $start, $title) {

  $options = array(
    "--slope-mode",
    "--start", $start,
    "--title=$title",
    "--vertical-label=% free",
    "--lower=0",
    "--height=200",
    "--width=370",
    "DEF:a=/home/pi/bin/sys/data/data_mem_free.rrd:data:AVERAGE",
    "CDEF:b=a,1,*",
    "LINE4:b#00FF00:% free",
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
