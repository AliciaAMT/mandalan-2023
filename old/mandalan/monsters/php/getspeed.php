<?php
$speed=0;
$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	$speed=$speed+$row['speed'];
	include ('php/getstats.php');
	$speed=$speed+$bspeed;
}

?>