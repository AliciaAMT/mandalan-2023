<?php

$sbblock=0;
//include ('php/getitemblock.php');************************************

$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {

if ($lhweapontype=="Blade")

{
$sbblock=$sbblock+$row['sbblocking'];
}

if ($rhweapontype=="Blade")

{
$sbblock=$sbblock+$row['sbblocking'];
}

}

?>