<?php

$query=sprintf("update inventory set keep=keep+3 where itemname='Spider Silk' and username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set experience=experience+50 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set wins=wins+1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set fight=0 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);


echo "<div class=\"full\"><table class=\"page\"><tr><td class=\"border\"><br />You gain 50 experience!<br /><br />You find:<br />Spider Silk<br /><br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"../maingraphict.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table>

</td></tr></table></td></tr></table></div></body></html>"

  ?>