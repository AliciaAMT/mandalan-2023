<?php

include ('php/getdark.php');



echo "<div class=\"border1\"><table class=\"page\"><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Critical Hit</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This skill provides the Dark master knowledge for an increased chance for a critical hit and increased critical hit damage.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sdcritical;



echo "</td><td class=\"page\"><form action=\"adddarkt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"critical\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Dark Restistance</h2></td></tr><tr><td class=\"left\" colspan=\"2\">As a Dark master learns to manipulate the dark, he also becomes resistant to it's destructive forces.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sdresist;

echo "</td><td class=\"page\"><form action=\"adddarkt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"resist\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Vampiric Drain</h2></td></tr><tr><td class=\"left\" colspan=\"2\">You learn how to drain your opponent's life and add it to your own. You must be a Dark Magic Master to benefit from this skill.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sdvampire;



echo "</td><td class=\"page\"><form action=\"adddarkt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"vampire\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Eye of Dispair</h2></td></tr><tr><td class=\"left\" colspan=\"2\">You practice a gaze that fills your opponent with so much dispair they give up and allow themselves to be killed. You must be a Dark Magic Master to benefit from this skill.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $sdeye;



echo "</td><td class=\"page\"><form action=\"adddarkt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"eye\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr></table></div>";



?>