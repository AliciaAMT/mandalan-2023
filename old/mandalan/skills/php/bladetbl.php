<?php

include ('php/getblade.php');



echo "<div class=\"border1\"><table class=\"page\"><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Critical Hit</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This skill provides the blades master knowledge for an increased chance for a critical hit and increased critical hit damage.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sbcritical;



echo "</td><td class=\"page\"><form action=\"addblade.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"critical\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Blocking Blades</h2></td></tr><tr><td class=\"left\" colspan=\"2\">Training in this skill increases the chance that you will block the opponent's attack when equipped with a blade. The effect is doubled when using dual blades.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sbblocking;

echo "</td><td class=\"page\"><form action=\"addblade.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"blocking\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Backstabbing</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This skills trains you to do a backstabbing attack which is a critical hit from which the victim is not able to react, allowing you to attack again. Chances to backstab are better when the victim is running away.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sbbackstab;



echo "</td><td class=\"page\"><form action=\"addblade.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"backstabbing\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Bleeding</h2></td></tr><tr><td class=\"left\" colspan=\"2\">Training in anatamy allows the skilled blade master to strike areas of the body that will leave the victim wounded in such a way that they continue to bleed even after the attack.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sbbleed;



echo "</td><td class=\"page\"><form action=\"addblade.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"bleed\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr></table></div>";



?>