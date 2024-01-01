<?php
$query=sprintf("select race from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	echo $row['race'];
	}
?>