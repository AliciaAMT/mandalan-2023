<?php
include ('php/unequipdual.php');
$query2=sprintf("update inventory set equip=0, equiprh=0, equiplh=0, keep=1 where username='%s' and equiprh=1 and equip=1;", mysql_real_escape_string($username));

  mysql_query ($query2);

$query2=sprintf("update inventory set equip=1, equiprh=1, keep=0 where username='%s' and itemnumber='%s';", mysql_real_escape_string($username),mysql_real_escape_string($equiprh));
  mysql_query ($query2);
?>