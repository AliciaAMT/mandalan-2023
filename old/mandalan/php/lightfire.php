<?php

echo "<br /><img src=\"images/fire.png\" border=\"0\" /><br />You light a fire!<br /><br />";

  $query=sprintf("update stats set firelit='y' where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
    
  $query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Firewood';", mysql_real_escape_string($username));
  mysql_query ($query);

echo "<table class=\"page\"><tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form action=\"fireplace.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table>

</td></tr></table>";
 ?>