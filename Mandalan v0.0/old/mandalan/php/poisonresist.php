<?php
$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	$poisonresist=$row['poisonresist'];
	include ('php/getstats.php');
	$poisonresist=$poisonresist+$bpoisonresist;
	echo $poisonresist."%";
	}

?>