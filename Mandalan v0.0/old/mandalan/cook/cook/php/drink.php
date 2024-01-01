<?php 

include ('../php/getstats.php');
include ('../php/getcondition.php');

if ($condition=="Plagued")
{
die ("<table class=\"page\"><tr><td class=\"page\">You cannot drink water to heal because you are Plagued!</td></tr><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"../maingraphics.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table></td></tr></table></td></tr></table></body></html>");
}

$query = sprintf("select * from inventory where username='%s' and waterunits>0;",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {

  if ($row['waterunits']>0)
  {

  $query = sprintf("update inventory set waterunits=waterunits-1 where waterunits>0 and username='%s';",mysql_real_escape_string($username));
mysql_query($query);


$query = sprintf("update stats set life=life+10 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set mana=mana+10 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

include ('php/maxeven.php');

die ("<table class=\"page\"><tr><td class=\"page\">You are refreshed.<br /><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"../maingraphics.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table>
</td></tr></table></td></tr></table></body></html>");

}

}
?>


