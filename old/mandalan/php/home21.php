<?php

$query=sprintf("update inventory set keep=keep+1 where username='%s' and itemname='Lockpick';", mysql_real_escape_string($username));
  mysql_query ($query);

?>