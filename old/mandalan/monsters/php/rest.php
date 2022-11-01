<?php

$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  include ('php/water.php');
  
  if ($water>0)
  {
  include ('php/sleep.php');
  echo "You rest, using one eight hour ration of water, and you feel refreshed.";
  
  include ('php/drinkwater.php');
  }
  
  if ($water==0)
  {
  echo "You need water in order to rest.";
  }
  
  }
?>
