<?php

$query=sprintf("update stats set life=maxlife where username='%s';", mysql_real_escape_string($username));

mysql_query($query);

$query=sprintf("update stats set mana=maxmana where username='%s';", mysql_real_escape_string($username));

mysql_query($query);

?>
