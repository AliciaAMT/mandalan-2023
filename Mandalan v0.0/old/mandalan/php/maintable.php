<?php
echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"3\"><img src=\"../images/inventory.png\" /><br /><h2>Inventory</h2>";
echo "</td></tr><tr><td class=\"center\"><form action=\"keep.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Keep Pocket\" /></form></td><td class=\"center\"><br />";
echo "</td><td class=\"center\"><form action=\"food.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Food Pocket\" /></form></td></tr><tr><td class=\"center\"><form action=\"trade.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Trade Pocket\" /></form></td><td class=\"center\"><br />";
echo "</td><td class=\"center\"><form action=\"equip.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Equip Pocket\" /></form></td></tr><tr><td class=\"center\" colspan=\"3\"><form action=\"../maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
?>
