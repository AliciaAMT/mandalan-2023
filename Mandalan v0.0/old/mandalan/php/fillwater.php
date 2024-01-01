<?php
$query=sprintf("update inventory set waterunits=maxwater where username='%s' and maxwater>0;", mysql_real_escape_string($username));
  mysql_query ($query);
?>