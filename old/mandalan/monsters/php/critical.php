<?php
	$critical=0;
include ('php/getwtype.php');
include ('php/getstats.php');


$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
		
	if ($lhweapontype=="Blade")
	{
	$critical=$critical+$row['sbcritical'];
	}
	
	if ($rhweapontype=="Blade")
	{
	$critical=$critical+$row['sbcritical'];
	}
	
	if ($rhweatontype==$lhweapontype)
	{
	$bonus=$critical/2;
	$critical=$critical+$bonus;
	}
	
	$critical=$critical+$bcritical;
	
	}
?>