<?php

include ('php/getair.php');



echo "<div class=\"border1\"><table class=\"page\"><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Critical Hit</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This skill provides the Air master knowledge for an increased chance for a critical hit and increased critical hit damage.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $slcritical;



echo "</td><td class=\"page\"><form action=\"addairt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"critical\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Air Restistance</h2></td></tr><tr><td class=\"left\" colspan=\"2\">As an Air master learns to manipulate the air, he also becomes resistant to it's destructive forces.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $slresist;

echo "</td><td class=\"page\"><form action=\"addairt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"resist\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Stun</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This skill increases your chances for your attack to stun your opponent with a zap of lightning.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $slstun;



echo "</td><td class=\"page\"><form action=\"addairt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"stun\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Reviving Jolt</h2></td></tr><tr><td class=\"left\" colspan=\"2\">Upon death you have a chance to jolt your heart back into rythm restoring minimal life.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $slrevive;



echo "</td><td class=\"page\"><form action=\"addairt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"revive\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr></table></div>";



?>