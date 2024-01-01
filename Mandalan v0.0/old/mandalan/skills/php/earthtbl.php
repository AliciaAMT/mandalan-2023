<?php

include ('php/getearth.php');



echo "<div class=\"border1\"><table class=\"page\"><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Critical Hit</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This skill provides the Earth master knowledge for an increased chance for a critical hit and increased critical hit damage.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $secritical;



echo "</td><td class=\"page\"><form action=\"addearth.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"critical\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Earth Restistance</h2></td></tr><tr><td class=\"left\" colspan=\"2\">As an Earth master learns to manipulate the earth, he also becomes resistant to it's destructive forces.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $seresist;

echo "</td><td class=\"page\"><form action=\"addearth.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"resist\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Tremors</h2></td></tr><tr><td class=\"left\" colspan=\"2\">You learn how to make the ground shake, knocking your enemy off his feet. Strength and duration of tremors increase with skill.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $setremor;



echo "</td><td class=\"page\"><form action=\"addearth.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"tremor\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Swarming Plague</h2></td></tr><tr><td class=\"left\" colspan=\"2\">You unleash an swarm of poisonous insects that both distract and damage your enemies.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $seswarm;



echo "</td><td class=\"page\"><form action=\"addearth.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"swarm\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr></table></div>";



?>