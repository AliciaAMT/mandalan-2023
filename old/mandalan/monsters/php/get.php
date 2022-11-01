<?php

include ('../php/getstats.php');
include ('php/yourstats.php');

$query = sprintf("select * from enemy where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  if ($row['enemylife']<1)
{
die ("<br /><br /><table class=\"page\"><tr><td class=\"border\">Your enemy has died!<br /><br  /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"loot.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Loot Body\" /></form></td></tr></table></td></tr></table></td></tr></table></body></html>");
}
  
  $block=$row['enemyblock'];
  $evade=$row['enemyevade'];
  
  $enemyspeed=$enemyspeed+$row['enemyspeed'];
  $enemyspeed=$enemyspeed+$benemyspeed;
  $enemyspeed=$enemyspeed-$bslow;
  $bleedcount=$row['enemybleed'];
 
  }
  ?>