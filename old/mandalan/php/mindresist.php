<?php
$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	$mindresist=$row['mindresist'];
	include ('php/getstats.php');
	$mindresist=$mindresist+$bmindresist;
	echo $mindresist."%";
	}

?>