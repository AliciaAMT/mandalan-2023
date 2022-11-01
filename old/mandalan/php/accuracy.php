<?php
$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	$accuracy=$row['accuracy'];
	include ('php/getstats.php');
	include ('php/getskills.php');
	$accuracy=$accuracy+$baccuracy+$smeagle;
	echo $accuracy;
	}

?>