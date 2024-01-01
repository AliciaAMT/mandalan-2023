<?php

echo "<table class=\"page\"><tr><td class=\"center\"><img src=\"../images/inventory.png\" /><h2>Trade Pocket</h2>";

echo "</td></tr><tr><td class=\"center\"><form action=\"trade.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Weapon\" /><input class=\"small\" type=\"submit\" value=\"Weapons\" /></form></td></tr><tr><td class=\"center\"><form action=\"trade.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Armor\" /><input class=\"small\" type=\"submit\" value=\"Armor\" /></form></td></tr><tr><td class=\"center\"><form action=\"trade.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Accessory\" /><input class=\"small\" type=\"submit\" value=\"Accessories\" /></form></td></tr><tr><td class=\"center\"><form action=\"trade.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Other\" /><input class=\"small\" type=\"submit\" value=\"Other\" /></form></td></tr><tr><td class=\"page\"><br /></td></tr><tr><td class=\"center\"><form action=\"inventory.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back\" /></form></td></tr></table>";

?>

