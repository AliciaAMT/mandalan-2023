<?php

include ('php/getfire.php');



echo "<div class=\"border1\"><table class=\"page\"><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Critical Hit</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This skill provides the Fire master knowledge for an increased chance for a critical hit and increased critical hit damage.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sfcritical;



echo "</td><td class=\"page\"><form action=\"addfire.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"critical\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Fire Restistance</h2></td></tr><tr><td class=\"left\" colspan=\"2\">As a Fire master learns to manipulate the flames, he also becomes resistant to thier burning heat.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sfresist;

echo "</td><td class=\"page\"><form action=\"addfire.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"resist\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Smoke Screen</h2></td></tr><tr><td class=\"left\" colspan=\"2\">With smoke surrounding your enemy, he will find it difficult to see you during attack.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sfsmoke;



echo "</td><td class=\"page\"><form action=\"addfire.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"smoke\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Inferno</h2></td></tr><tr><td class=\"left\" colspan=\"2\">You learn to burn your enemy in such a way that the burning continues for several rounds.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sfinferno;



echo "</td><td class=\"page\"><form action=\"addfire.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"inferno\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr></table></div>";



?>