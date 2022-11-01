<?php

include ('php/getmaxlife.php');
include ('php/sleep.php');
include ('php/getmaxmana.php');

$query = sprintf("update stats set life='%s' where username='%s');",
mysql_real_escape_string($username),
mysql_real_escape_string($maxlife));
mysql_query($query, $con);

$query = sprintf("update stats set mana='%s' where username='%s');",
mysql_real_escape_string($username),
mysql_real_escape_string($maxmana));
mysql_query($query, $con);

echo "<table class=\"page\"><tr><td class=\"center\"><img src=\"images/bed.png\" /></td></tr>";
echo "<tr><td class=\"left\">";
echo "You rest and recover full life and mana. If you die, you will wake up here alive, but you will be penalized in experience. If you sleep somewhere else, that spot will be where you wake up upon death. Sleeping can also heal conditions such as Plague and Disease. It will not heal Poison.";
echo "</td></tr>";

echo "<tr><td class=\"center\">";

echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"sleep\" action=\"maingraphics.php?".time();
echo "\" method=\"get\"><input type=\"submit\" value=\"Back to Map\" class=\"small\"></form></td></tr></table>";
  
echo "</td></tr></table>";

?>