<?php

include ('php/getmissle.php');



echo "<div class=\"border1\"><table class=\"page\"><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Critical Hit</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This skill provides the missile weapons master knowledge for an increased chance for a critical hit and increased critical hit damage.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $smcritical;



echo "</td><td class=\"page\"><form action=\"addmisslet.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"critical\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Eagle Eye</h2></td></tr><tr><td class=\"left\" colspan=\"2\">With this skill you learn to sharpen your senses, especially your vision, to improve your accuracy.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $smeagle;

echo "</td><td class=\"page\"><form action=\"addmisslet.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"eagle\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Poison Projectiles</h2></td></tr><tr><td class=\"left\" colspan=\"2\">You learn how to coat the tips of your weapons with a powerful and deadly poison.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $smpoison;



echo "</td><td class=\"page\"><form action=\"addmisslet.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"poison\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Flaming Projectiles</h2></td></tr><tr><td class=\"left\" colspan=\"2\">With this skill you add fire to your attack and burn your enemies for several rounds.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $smfire;



echo "</td><td class=\"page\"><form action=\"addmisslet.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"fire\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr></table></div>";



?>