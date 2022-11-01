<?php
include ('../php/getstats.php');
include ('../php/getwtype.php');
$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  $block=$row['agility']+$row['strength'];
$block=$block+$bstrength+$bagility;
$block=$block/2;

if ($lhweapontype=="Blade")
{
$block=$block+$row['sbblocking'];
}
if ($rhweapontype=="Blade")
{
$block=$block+$row['sbblocking'];
}

if ($lhweapontype==$rhweapontype)
{
$bonus=$block/2;
$block=$block+$bonus;
}

  }
  ?>