<?php

include ('php/getfirewood.php');
include ('php/gettinderbox.php');

$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
echo "<h2>Fireplace</h2><br /><img src=\"images/fireplace.png\" border=\"0\" /><br /><br />";

if ($row['firelit']=='y')
{
echo "<img src=\"images/fire.png\" border=\"0\" /><br />Fire is lit. You may cook here or rest.<br /><br />";
}


//######################################add firewood and tinderbox code here
if ($firewood>0 and $tinderbox>0 and $row['firelit']!='y')
{
echo "<table class=\"page\"><tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form action=\"lightfire.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Light Fire\" /></form></td></tr></table></td></tr></table><br />";
}
if ($row['homefireplace']==0)
{
echo "<table class=\"page\"><tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form action=\"homemantle.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Search Fireplace\" /></form></td></tr></table>
</td></tr></table><br />";
}
if ($row['firelit']=='y')
{
echo "<table class=\"page\"><tr><td class=\"page\">";


echo "<table class=\"page\"><tr><td class=\"page\"><form action=\"cook/cookbook.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Cook\" /></form>";

echo "</td></tr><tr><td class=\"page\">";


echo "<form action=\"camp.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Rest\" /></form></td></tr></table></td></tr></table>";
}
if ($row['firelit']!='y')
{
echo "<table class=\"page\"><tr><td class=\"page\">Tip: If you light a fire you can cook or rest here. You need flint and firewood to light a fire.</td></tr><tr><td class=\"page\">";
echo "<table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back\" /></form></td></tr></table></td></tr></table></td></tr></table>";
}
}

?>
