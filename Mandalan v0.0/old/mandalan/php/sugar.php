<?php

echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You found Sugar Cane!</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/sugar.png\" /><br />Sugar</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/addsugar.php');

?>