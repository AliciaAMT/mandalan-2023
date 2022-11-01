<?php

include ('php/getwater.php');



echo "<div class=\"border1\"><table class=\"page\"><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Critical Hit</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This skill provides the Water master knowledge for an increased chance for a critical hit and increased critical hit damage.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sicritical;



echo "</td><td class=\"page\"><form action=\"addwatert.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"critical\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Water Restistance</h2></td></tr><tr><td class=\"left\" colspan=\"2\">As a Water master learns to manipulate the water, he also becomes resistant to it's destructive forces.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $siresist;

echo "</td><td class=\"page\"><form action=\"addwatert.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"resist\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Coldblood</h2></td></tr><tr><td class=\"left\" colspan=\"2\">With this skill you learn how to cool the water in your blood to slow the flow and prevent severe bleeding.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sicoldblood;



echo "</td><td class=\"page\"><form action=\"addwatert.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"coldblood\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Dry Ice</h2></td></tr><tr><td class=\"left\" colspan=\"2\">You freeze your enemy in such a way that the next blow causes critical damage.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sidryice;



echo "</td><td class=\"page\"><form action=\"addwatert.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"dryice\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr></table></div>";



?>