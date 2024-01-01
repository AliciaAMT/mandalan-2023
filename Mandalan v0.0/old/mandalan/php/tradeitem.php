<?php
$query2=sprintf("update inventory set equip=0, equiplh=0, equiprh=0, keep=0, trade=1 where username='%s' and itemnumber='%s';", mysql_real_escape_string($username),
mysql_real_escape_string($trade));
  mysql_query ($query2);
?>