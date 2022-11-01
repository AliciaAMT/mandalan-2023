<?php
echo "<table class=\"page\"><tr><td class=\"center\"><img src=\"../images/spellbook.png\" /><h2>Potions</h2>";
echo "</td></tr><tr><td class=\"center\"><form action=\"potions.php?";

echo time();
echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Blessings\" /><input class=\"small\" type=\"submit\" value=\"Blessings\" /></form></td></tr><tr><td class=\"center\"><form action=\"potions.php?";

echo time();
echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Curses\" /><input class=\"small\" type=\"submit\" value=\"Curses\" /></form></td></tr><tr><td class=\"page\"><br /></td></tr><tr><td class=\"center\"><form action=\"spellbook.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back\" /></form></td></tr></table>";
?>
