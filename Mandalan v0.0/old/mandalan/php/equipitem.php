<?php
include ('../php/connect.php');
include ('../php/getcookie.php');
$equip=strip_tags($_GET["equip"]); 

include ('php/getlocation.php');

$query2=sprintf("update inventory set equip=0, equiplh=0, equiprh=0, keep=1 where username='%s' and equiplocation='%s' and equip=1;", mysql_real_escape_string($username),
mysql_real_escape_string($location));
  mysql_query ($query2,$con);
    
$query2=sprintf("update inventory set equip=1, keep=0 where username='%s' and itemnumber='%s';", mysql_real_escape_string($username),mysql_real_escape_string($equip));
  mysql_query ($query2,$con);
?>