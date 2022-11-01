<?php

include ('php/getfight.php');

echo "<table class=\"page\" width=\"100%\"><tr><td class=\"center\" colspan=\"3\"><h2>Spellbook</h2>";
echo "</td></tr><tr><td class=\"center\"><form action=\"elementalst.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Elemental Spells\" /></form></td><td class=\"center\"><br />";
echo "</td><td class=\"center\"><form action=\"enchantmentst.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Enchantments\" /></form></td></tr><tr><td class=\"center\"><form action=\"potionst.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Potions\" /></form></td><td class=\"center\"><br />";
echo "</td><td class=\"center\"><form action=\"scrollst.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Scrolls\" /></form></td></tr>";


if ($fight==0)
{
echo "<tr><td class=\"center\" colspan=\"3\"><form action=\"../maingraphict.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
}

if ($fight==1)
{
echo "<tr><td class=\"center\" colspan=\"3\"><form action=\"../monsters/nomovet.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Battle\" /></form></td></tr></table>";
}

?>
