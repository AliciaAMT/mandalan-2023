<?php

echo "<table class=\"page\"><tr><td class=\"center\"><img src=\"../images/inventory.png\" /><h2>Potions</h2>";

echo "</td></tr>

<tr><td class=\"center\"><form action=\"potions.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Ingredients\" /><input class=\"small\" type=\"submit\" value=\"Ingredients\" /></form></td></tr>


<tr><td class=\"center\"><form action=\"potions.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Recipes\" /><input class=\"small\" type=\"submit\" value=\"Recipes\" /></form></td></tr>
<tr><td class=\"page\"><br /></td></tr><tr><td class=\"center\"><form action=\"../maingraphics.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";

?>

