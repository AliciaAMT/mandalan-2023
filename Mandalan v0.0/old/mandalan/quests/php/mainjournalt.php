<?php

echo "<table class=\"page\"><tr><td class=\"center\"><h2>Quest Journal</h2>";

echo "</td></tr><tr><td class=\"center\"><form action=\"questst.php?";

echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Main Quests\" /><input class=\"small\" type=\"submit\" value=\"Main Quests\" /></form></td></tr><tr><td class=\"center\"><form action=\"questst.php?";

echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"Side Quests\" /><input class=\"small\" type=\"submit\" value=\"Side Quests\" /></form></td></tr><tr><td class=\"center\"><form action=\"questst.php?";

echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"All Quests\" /><input class=\"small\" type=\"submit\" value=\"All Quests\" /></form></td></tr><tr><td class=\"center\"><br /><form action=\"../maingraphict.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";

?>

