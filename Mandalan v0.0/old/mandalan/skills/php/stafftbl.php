<?php

include ('php/getstaff.php');



echo "<div class=\"border1\"><table class=\"page\"><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Critical Hit</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This skill provides the staff master knowledge for an increased chance for a critical hit and increased critical hit damage.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sscritical;



echo "</td><td class=\"page\"><form action=\"addstaff.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"critical\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Blocking Staff</h2></td></tr><tr><td class=\"left\" colspan=\"2\">Training in this skill increases the chance that you will block the opponent's attack when equipped with a staff. The effect is doubled when using dual staves.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $ssblocking;

echo "</td><td class=\"page\"><form action=\"addstaff.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"blocking\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Catapult</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This skills trains you to use your staff weapon as a lever to catapult your enemy into the air, causing him to use his next turn to recover.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sscatapult;



echo "</td><td class=\"page\"><form action=\"addstaff.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"catapult\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Elemental Staff</h2></td></tr><tr><td class=\"left\" colspan=\"2\">Training in the elements allows a skilled staff master to simultaneosly create a random elemental attack along with the physical staff attack. Chances for an elemental attack increase as skill increases.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sselemental;



echo "</td><td class=\"page\"><form action=\"addstaff.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"elemental\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr></table></div>";



?>