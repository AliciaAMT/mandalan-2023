<?php

$query=sprintf("select * from enemy where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	if ($row['enemybleed']>0)
	{
	$counter=$counter."<span class=\"red\">Your enemy bleeds for <b>".$ebleedamt."</b> damage.</span><br />";
	
	$query = sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($ebleedamt),
mysql_real_escape_string($username));
mysql_query($query);
	
	$query = sprintf("update enemy set enemybleed=enemybleed-1 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);
	
	}
	}
	
	?>