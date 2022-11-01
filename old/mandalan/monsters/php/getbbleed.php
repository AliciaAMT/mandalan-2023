<?php

$enemybleed=0;
$ebleedamt=0;
include ('php/getwtype.php');

$query=sprintf("select * from skills where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
		
	if ($lhweapontype=="Blade")
	{
	$enemybleed=$enemybleed+$row['sbbleed'];
	}
	
	if ($rhweapontype=="Blade")
	{
	$enemybleed=$enemybleed+$row['sbbleed'];
	}
	
	$ebleedamt=$ebleedamt+3;
	$ebleedamt=round($ebleedamt);
	}
?>