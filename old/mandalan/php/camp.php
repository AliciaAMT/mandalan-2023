<?php

include ('php/getstats.php');
include ('php/checkwater.php');

include ('php/getcondition.php');
if ($condition=="Plagued")
{
die ("<table class=\"page\"><tr><td class=\"page\">You cannot rest here because you are Plagued! You must sleep in a bed to recover.</td></tr><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table></td></tr></table></td></tr></table></body></html>");
}


if ($waters==0)
{
die ("<table class=\"page\"><tr><td class=\"page\">You cannot rest because you do not have any water.</td></tr><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table>
</td></tr></table></td></tr></table></body></html>");
}

else
{
$query = sprintf("select * from inventory where username='%s' and waterunits>0;",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  if ($row['waterunits']>0)
  {
  $query = sprintf("update inventory set waterunits=waterunits-1 where waterunits>0 and username='%s';",mysql_real_escape_string($username));
mysql_query($query);


$query = sprintf("update stats set life=maxlife where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set mana=maxmana where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

die ("<table class=\"page\"><tr><td class=\"page\">You sleep by the warmth of the fire and drink some water and are refreshed.<br /><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table>
</td></tr></table></td></tr></table></body></html>");

}
}
}
?>