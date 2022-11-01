<?php
$query=sprintf("select magicfind from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	$magicfind=$row['magicfind'];
	$magicfind=$magicfind+$bmagicfind;
	echo $magicfind;
	}

?>