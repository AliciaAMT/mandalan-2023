<?php

$query=sprintf("select spellname, learned from spellbook where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))

{

if ($row['spellname']=="Fireball")
{
$fireball=$row['learned'];
}

if ($row['spellname']=="First Aid")
{
$firstaid=$row['learned'];
}

}

?>