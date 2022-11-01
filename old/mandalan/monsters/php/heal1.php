<?php
include ('php/connect.php');

include ('php/getcookie.php');

include ('php/enemyevade.php');

include ('php/enemyblock.php');

include ('php/enemydead.php');

include ('php/dead.php');

include ('../php/enemy.php');

$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  include ('../php/water.php');
  
  echo "<table class=\"page\"><tr><td class=\"skills\">";
  
  if ($water>0)
  {
  echo "<table class=\"page\"><tr><td class=\"cskills\" colspan=\"2\">Water</td></tr><tr><td class=\"lskills\" colspan=\"2\">Eight hours worth of thirst quenching, life giving water.<br />Water Units: ";
  echo $water;
  echo "</td></tr><tr><td class=\"lskills\" width=\"375px\">Life +10<br />Mana +10</td><td class=\"bskills\"><a href=\"drinkwater.php\">Drink Water</a></td></tr></table>";
  
  echo "</td></tr></table>";
  }
  echo "<table class=\"page\"><tr><td class=\"bskills\"><a href=\"".$enemy.".php?".time()."\">Back</a></td></tr></table></body></html>";
  }  
  
?>
