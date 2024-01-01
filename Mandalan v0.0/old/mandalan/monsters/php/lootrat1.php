<?php
include ('php/connect.php');

include ('php/getcookie.php');

$query=sprintf("update stats set rattailkeep=rattailkeep+1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set experience=experience+25 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

echo "<div class=\"full\"><table class=\"page\"><tr><td class=\"cgskills\"><br />You gain 25 experience!<br /><br />You find:<br /><br /><img src=\"../images/rattail.png\" border=\"0\" /><br />Rat Tail<br /><br /><table class=\"page\"><tr><td class=\"bskills\"><a href=\"maingraphics.php&";

echo time();

echo "\">Continue</a></td></tr></table></td></tr></table></div></body></html>"

  ?>