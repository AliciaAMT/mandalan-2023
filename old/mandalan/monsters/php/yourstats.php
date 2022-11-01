<?php

$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {

$life=$row['life'];
$life=$life+$blife;

  if ($life<1)
{
die ("<br /><br /><table class=\"page\"><tr><td class=\"border\">You have died!<br  /><br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"revive.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Go Towards the Light\" /></form></td></tr></table></td></tr></table></td></tr></table></body></html>");
}
  
  
  $speed=$speed+$row['speed'];
  $speed=$speed+$bspeed;
  
  $strength=$strength+$row['strength'];
  
  $level=$level+$row[level];
    
  $burncount=$row['infernocount'];
  
  }
  
  ?>