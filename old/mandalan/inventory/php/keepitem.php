<?php
$query2=sprintf("update inventory set equip=0, equiplh=0, equiprh=0, trade=0, keep=1 where username='%s' and itemnumber='%s';", mysql_real_escape_string($username),
mysql_real_escape_string($keep));
  mysql_query ($query2);
?>