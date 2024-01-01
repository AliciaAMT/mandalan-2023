<?php
$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	$alchemy=$row['alchemy'];
	//include ('php/getstats.php');
	//$alchemy=$alchemy+$balchemy;
	echo $alchemy;
	}

?>