<?php
include ('../php/connect.php');

include ('php/enemyevade.php');

include ('php/enemyblock.php');

include ('php/enemydead.php');

include ('php/dead.php');

include ('../php/enemy.php');
include ('../php/water.php');

  
  echo "<table class=\"page\"><tr><td class=\"border\">";
  
  if ($water>0)
  {
  echo "<table class=\"page\"><tr><td class=\"border\" colspan=\"2\">Water</td></tr><tr><td class=\"border\" colspan=\"2\">Eight hours worth of thirst quenching, life giving water.<br />Water Units: ";
  echo $water;
  echo "</td></tr><tr><td class=\"border\" width=\"375px\">Life +10<br />Mana +10</td><td class=\"border\"><a href=\"drinkwater.php\">Drink Water</a></td></tr></table>";
  
  echo "</td></tr></table>";
  
  echo "<table class=\"page\"><tr><td class=\"border\"><a href=\"".$enemy.".php?".time()."\">Back</a></td></tr></table></body></html>";
  }
  else
  {
  echo "You don't have water";
  echo "<table class=\"page\"><tr><td class=\"border\"><a href=\"".$enemy.".php?".time()."\">Back</a></td></tr></table></body></html>";
  }
?>
