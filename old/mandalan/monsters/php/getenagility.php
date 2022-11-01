<?php
$enemyagility=0;
$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	$enemyagility=$enemyagility+$row['enemyagility'];
}

?>