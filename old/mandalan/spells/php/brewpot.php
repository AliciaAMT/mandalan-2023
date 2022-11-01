<?php

$spell=$_POST["type"];

include ('php/getingredients.php');

$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{

if ($spell=='Holy Water 1')
{

if ($ingredients==0)
{
//not enough mana message
echo "<table class=\"page\"><tr><td class=\"center\"><h3>Missing Ingredients</h3>You are missing one or more of the ingredients required to make this potion.</td></tr><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\">";

if ($row['fight']==1)
{echo "<form action=\"../monsters/attack.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Battle\" /></form>";}
if ($row['fight']==0)
{
echo "<form action=\"potions.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Spellbook\" /></form></td></tr><tr><td class=\"page\">";

echo "<form action=\"../maingraphics.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form>";


}

echo "</td></tr></table></td></tr></table>";
}
else
{}

}

}
?>