<?php

include ('../php/getstats.php');

$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {

$life=$row['life'];
$life=$life+$blife;
$maxlife=$row['maxlife'];
$maxlife=$maxlife+$blife;


  if ($row['life']>$row['maxlife'])
  {
  $query = sprintf("update stats set life=maxlife where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
  
  
  if ($row['mana']>$row['maxmana'])
  {$query = sprintf("update stats set mana=maxmana where username='%s';",mysql_real_escape_string($username));
mysql_query($query);}

}
?>