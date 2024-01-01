<?php

$query=sprintf("select * from cookbook where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{
$friedmeat=$row['friedmeat'];
$meatsandwich=$row['friedmeatsandwich'];
$applesauce=$row['applesauce'];
$cesarsalad=$row['cesarsalad'];
}

?>