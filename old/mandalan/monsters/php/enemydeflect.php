<?php
include ('php/connect.php');

include ('php/getcookie.php');

$query = sprintf("select * from enemy where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  $deflect=$row['enemyarmor'];
$rand=mt_rand(1,100);
$rand=$rand*.01;
$deflect=$deflect*$rand;
$deflect=round($deflect);
  }
  ?>