<?php
$damage=0;
$query=sprintf("select * from inventory where username='%s';",mysql_real_escape_string($username));
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	if ($row['equiplh']>0)
	{
	$damage=$damage+$row['weaponbase']+$row['itemlevel'];
	}
	if ($row['equiprh']>0)
	{$damage=$damage+$row['weaponbase']+$row['itemlevel'];}
	
	}
	$damage=$damage+$bdamage;
	echo $damage;
?>