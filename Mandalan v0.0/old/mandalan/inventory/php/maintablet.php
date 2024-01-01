<?php

include ('php/getfight.php');

echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"3\">
<h2>Inventory</h2>";

echo "</td></tr><tr><td class=\"center\"><form action=\"keept.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Keep Pocket\" /></form></td><td class=\"center\"><br />";

echo "</td><td class=\"center\"><form action=\"foodt.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Food Pocket\" /></form></td></tr><tr><td class=\"center\"><form action=\"tradet.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Trade Pocket\" /></form></td><td class=\"center\"><br />";

echo "</td><td class=\"center\"><form action=\"equipt.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Equip Pocket\" /></form></td></tr>";



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

