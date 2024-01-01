<?php

include ('php/getblunt.php');



echo "<div class=\"border1\"><table class=\"page\"><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Critical Hit</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This skill provides the blunt weapons master knowledge for an increased chance for a critical hit and increased critical hit damage.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sccritical;



echo "</td><td class=\"page\"><form action=\"addbluntt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"critical\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Blocking Weapons</h2></td></tr><tr><td class=\"left\" colspan=\"2\">Training in this skill increases the chance that you will block the opponent's attack when equipped with a blunt weapon. The effect is doubled when using dual blunt weapons.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $scblocking;

echo "</td><td class=\"page\"><form action=\"addbluntt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"blocking\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Stunning Blow</h2></td></tr><tr><td class=\"left\" colspan=\"2\">You learn how to stun your opponent with your blunt weapons. While stunned, your opponent will be unable to defend or attack.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $scstun;



echo "</td><td class=\"page\"><form action=\"addbluntt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"stun\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Crushing Blow</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This attack both stuns and deals a critical blow to your opponent by crushing his skull.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sccrush;



echo "</td><td class=\"page\"><form action=\"addbluntt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"crush\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr></table></div>";



?>