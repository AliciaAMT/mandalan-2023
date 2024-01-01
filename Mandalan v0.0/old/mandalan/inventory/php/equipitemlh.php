<?php

include ('php/unequipdual.php');

$query2=sprintf("update inventory set equip=0, equiplh=0, equiprh=0, keep=1 where username='%s' and equiplh=1 and equip=1;", mysql_real_escape_string($username));

  mysql_query ($query2);

    

$query2=sprintf("update inventory set equip=1, equiplh=1, keep=0 where username='%s' and itemnumber='%s';", mysql_real_escape_string($username), mysql_real_escape_string($equiplh));

  mysql_query ($query2);

?>