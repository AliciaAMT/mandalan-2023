<?php

include ('php/enemyevade.php');

include ('php/enemyblock.php');

include ('php/enemydead.php');

include ('php/dead.php');


$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
$rand=mt_rand(1,100);
$flee=$row['agility']+$row['speed'];
$flee=$flee/2;
$flee=$flee-$enemyagility;
if ($flee>$rand)
{
$query = sprintf("update enemy set fight=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

echo "<table class=\"page\"><tr><td class=\"border\">You successfully escape the battle!<br /><br />";

echo "<table class=\"page\"><tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form action=\"../maingraphics.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table></td></tr></table></td></tr></table>";

die ("</td></tr></table></body></html>");
}
else
{
$report="<span class=\"green\">You were caught running away!</span><br />";
include ('php/endturn.php');
}
}
?>
