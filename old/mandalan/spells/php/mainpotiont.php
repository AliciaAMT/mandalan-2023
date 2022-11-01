<?php
echo "<table class=\"page\"><tr><td class=\"center\"><h2>Potions</h2>";
echo "</td></tr><tr><td class=\"center\"><form action=\"potionst.php?";

echo time();
echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Blessings\" /><input class=\"small\" type=\"submit\" value=\"Blessings\" /></form></td></tr><tr><td class=\"center\"><form action=\"potionst.php?";

echo time();
echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Curses\" /><input class=\"small\" type=\"submit\" value=\"Curses\" /></form></td></tr><tr><td class=\"page\"><br /></td></tr><tr><td class=\"center\"><form action=\"spellbookt.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back\" /></form></td></tr></table>";
?>
