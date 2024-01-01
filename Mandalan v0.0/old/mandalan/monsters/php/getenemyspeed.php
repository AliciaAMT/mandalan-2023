<?php
$enemyspeed=0;
$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	$enemyspeed=$enemyspeed+$row['enemyspeed'];
	include ('php/getstats.php');
	$enemyspeed=$enemyspeed+$benemyspeed;
	$enemyspeed=$enemyspeed-$bslow;
}

?>