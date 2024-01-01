<?php
$enemyburn=0;
$eburnamt=0;

include ('php/getwtype.php');
include ('php/getstats.php');


$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{

	$enemyburn=$enemyburn+$row['sfinferno'];
        $eburnamt=$eburnamt+3;
        $eburnamt=$eburnamt*$row['level'];
	
	}
?>