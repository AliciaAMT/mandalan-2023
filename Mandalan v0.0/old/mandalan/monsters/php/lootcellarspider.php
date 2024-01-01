<?php

include ('php/spidersilk.php');

$query=sprintf("update stats set experience=experience+50 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set wins=wins+1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update enemy set fight=0 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update flags set cellarspider=1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

echo "<div class=\"full\"><table class=\"page\"><tr><td class=\"border\"><br />You gain 50 experience!<br /><br />You find:<br /><br /><img src=\"../images/web.png\" border=\"0\" /><br />Spider Silk<br /><br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"../maingraphics.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table>

</td></tr></table></td></tr></table></div></body></html>"

  ?>