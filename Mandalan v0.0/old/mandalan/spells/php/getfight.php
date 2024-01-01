<?php

$fight=0;

$query=sprintf("select * from enemy where username='%s';", mysql_real_escape_string($username));

$result=mysql_query($query);

while($row = mysql_fetch_array($result))

{

$fight=$fight+$row['fight'];

}

?>