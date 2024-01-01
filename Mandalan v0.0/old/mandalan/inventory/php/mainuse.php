<?php

echo "<table class=\"page\"><tr><td class=\"center\"><img src=\"../images/inventory.png\" /><h2>Usable Items</h2>";

echo "</td></tr><tr><td class=\"center\"><form action=\"useitem.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"All\" /><input class=\"small\" type=\"submit\" value=\"All\" /></form></td></tr><tr><td class=\"center\"><form action=\"useitem.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Food\" /><input class=\"small\" type=\"submit\" value=\"Food\" /></form></td></tr><tr><td class=\"center\"><form action=\"useitem.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Potions\" /><input class=\"small\" type=\"submit\" value=\"Potions\" /></form></td></tr><tr><td class=\"center\"><form action=\"../monsters/nomove.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back\" /></form></td></tr></table>";

?>

