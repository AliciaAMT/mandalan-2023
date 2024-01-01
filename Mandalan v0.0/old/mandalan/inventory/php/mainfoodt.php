<?php

echo "<table class=\"page\"><tr><td class=\"center\"><h2>Food Pocket</h2>";

echo "</td></tr><tr><td class=\"center\"><form action=\"foodt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Water\" /><input class=\"small\" type=\"submit\" value=\"Water\" /></form></td></tr><tr><td class=\"center\"><form action=\"foodt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Consumable\" /><input class=\"small\" type=\"submit\" value=\"Consumable\" /></form></td></tr><tr><td class=\"center\"><form action=\"foodt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Ingredient\" /><input class=\"small\" type=\"submit\" value=\"Ingredients\" /></form></td></tr><tr><td class=\"page\"><br /></td></tr><tr><td class=\"center\"><form action=\"inventoryt.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back\" /></form></td></tr></table>";

?>
