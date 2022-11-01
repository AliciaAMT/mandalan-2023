<?php
$lhweapontype="None";
$rhweapontype="None";
$query=sprintf("select * from inventory where username='%s';",mysql_real_escape_string($username));
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	if ($row['equiplh']>0)
	{
	$lhweapontype=$row['weapontype'];
	}
	if ($row['equiprh']>0)
	{
	$rhweapontype=$row['weapontype'];
	}
	}
?>