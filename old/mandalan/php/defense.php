<?php
$defense=0;
$query=sprintf("select * from inventory where username='%s';",mysql_real_escape_string($username));
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	if ($row['equip']>0)
	{$defense=$defense+$row['defense'];
	$defense=$defense+$row['armorbase'];
	$bonus=round($row['itemlevel']*.1);
	$defense=$defense+$bonus;
	}
		
	}
	echo $defense;
?>