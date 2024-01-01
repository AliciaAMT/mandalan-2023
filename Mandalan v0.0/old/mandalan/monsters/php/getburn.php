<?php

$enemyburn=0;
$eburnamt=0;

$query=sprintf("select * from skills where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{

	$enemyburn=$enemyburn+$row['sfinferno'];
    $eburnamt=$eburnamt+3;
    	
	}
?>