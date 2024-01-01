<?php

include ('php/getfirewood.php');
include ('php/gettinderbox.php');

$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
echo "<h2>Fireplace</h2>";

if ($row['firelit']=='y')
{
echo "Fire is lit. You may cook here or rest.";
}


//######################################add firewood and tinderbox code here
if ($firewood>0 and $tinderbox>0 and $row['firelit']!='y')
{
echo "<table class=\"page\"><tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form action=\"lightfiret.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Light Fire\" /></form></td></tr></table></td></tr></table><br />";
}
if ($row['homefireplace']==0)
{
echo "<table class=\"page\"><tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form action=\"homemantlet.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Search Fireplace\" /></form></td></tr></table>
</td></tr></table><br />";
}
if ($row['firelit']=='y')
{
echo "<table class=\"page\"><tr><td class=\"page\">";


echo "<table class=\"page\"><tr><td class=\"page\"><form action=\"cook/cookbookt.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Cook\" /></form>";

echo "</td></tr><tr><td class=\"page\">";


echo "<form action=\"campt.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Rest\" /></form></td></tr></table></td></tr></table>";
}
if ($row['firelit']!='y')
{
echo "<table class=\"page\"><tr><td class=\"page\">Tip: If you light a fire you can cook or rest here. You need flint and firewood to light a fire.</td></tr><tr><td class=\"page\">";
echo "<table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back\" /></form></td></tr></table></td></tr></table></td></tr></table>";
}
}

?>
