<?php

include ('php/getenchantable.php');

$spell=$_POST["type"];

$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{

if ($spell=='Sparking Embers 1')
{

if ($row['mana']<25)
{
//not enough mana message
echo "<table class=\"page\"><tr><td class=\"center\"><h3>Not Enough Mana</h3>You need more mana before you can cast this spell. Resting is a way to regenerate mana.</td></tr><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\">";

if ($row['fight']==1)
{echo "<form action=\"../monsters/attackt.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Battle\" /></form>";}
if ($row['fight']==0)
{
echo "<form action=\"enchantmentst.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Spellbook\" /></form></td></tr><tr><td class=\"page\">";

echo "<form action=\"../maingraphict.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form>";


}

echo "</td></tr></table></td></tr></table>";
}
else
{
if ($enchantables==0)
{
echo "<table class=\"page\"><tr><td class=\"center\"><h3>No Enchantable Items</h3>You do not own any enchantable items. Enchantable items have Empty Enchantment Slots.</td></tr><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\">";

if ($row['fight']==1)
{echo "<form action=\"../monsters/attackt.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Battle\" /></form>";}
if ($row['fight']==0)
{
echo "<form action=\"enchantmentst.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Spellbook\" /></form></td></tr><tr><td class=\"page\">";

echo "<form action=\"../maingraphict.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form>";


}

echo "</td></tr></table></td></tr></table>";
}
}
}

}
?>