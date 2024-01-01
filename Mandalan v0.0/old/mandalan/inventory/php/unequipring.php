<?php

$ring=0;

include ('php/getrings.php');

//*************************************************


if ($ring>3)
{

die ("You already have 4 rings equipped. You must unequip one before you can wear another.<br /><table class=\"page\"><tr><td class=\"page\"><form action=\"inventory.php\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table></body></html>");
}

if ($ring<4)
{

$query2=sprintf("update inventory set equip=1, equiplh=0, equiprh=0, keep=0 where username='%s' and itemnumber='%s' and keep=1;", mysql_real_escape_string($username),

mysql_real_escape_string($equip));

  mysql_query ($query2);
  }
 
  
?>