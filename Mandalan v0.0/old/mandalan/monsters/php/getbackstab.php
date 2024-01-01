<?php
	$backstab=0;
include ('php/getwtype.php');
include ('php/getstats.php');


$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
		
	if ($lhweapontype=="Blade")
	{
	$backstab=$backstab+$row['sbbackstab'];
	}
	
	if ($rhweapontype=="Blade")
	{
	$backstab=$backstab+$row['sbbackstab'];
	}
	
	
	}
?>