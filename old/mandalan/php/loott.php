<?php


$query=sprintf("update stats set wins=wins+1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update enemy set fight=0 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("select enemyname from enemy where username='%s';", mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
  {

if ($row['enemyname']=="Rat")
{

$query=sprintf("update inventory set keep=keep+1 where itemname='Rat Tail' and username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set experience=experience+25 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

echo "<div class=\"full\"><table class=\"page\"><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>25</h3></td></tr><tr><td class=\"left\"><h3>You find:</h3></td><td class=\"left\"><h3>Rat Tail</h3></td></tr><tr><td class=\"page\" colspan=\"2\">";

echo "<table class=\"page\"><tr><td class=\"page\"><form action=\"../maingraphict.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table></td></tr></table></td></tr></table></td></tr></table></div></body></html>";
}

if ($row['enemyname']=="Cellar Spider")

{
$query=sprintf("update inventory set keep=keep+3 where itemname='Spider Silk' and username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set experience=experience+50 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set wins=wins+1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update enemy set fight=0 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);


echo "<div class=\"full\"><table class=\"page\"><tr><td class=\"border\"><br />You gain 50 experience!<br /><br />You find:<br />Spider Silk<br /><br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"../maingraphict.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table>

</td></tr></table></td></tr></table></div></body></html>";


}

if ($row['enemyname']=="Spider")
{
include ('php/spidersilk.php');

$query=sprintf("update stats set experience=experience+25 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set wins=wins+1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update enemy set fight=0 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

echo "<div class=\"full\"><table class=\"page\"><tr><td class=\"border\"><br />You gain 25 experience!<br /><br />You find:<br /><br /><img src=\"../images/web.png\" border=\"0\" /><br />Spider Silk<br /><br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"../maingraphics.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table></td></tr></table></td></tr></table></div></body></html>";

}

}
  ?>