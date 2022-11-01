<?php
$query=sprintf("select luck from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	$luck=$row['luck'];
	$luck=$luck+$bluck;
	}

?>