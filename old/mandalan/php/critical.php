<?php


include ('php/getwtype.php');
include ('php/getstats.php');
$query=sprintf("select * from skills where username='%s';",mysql_real_escape_string($username));
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	
	
	$critical=$row['sbcritical'];
	
	if ($rhweatontype==$lhweapontype)
	{
	$bonus=$critical/2;
	$critical=$critical+$bonus;
	}	
	$critical=$critical+$bcritical;
	
	echo $critical."%";
	}


?>