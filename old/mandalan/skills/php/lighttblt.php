<?php

include ('php/getlight.php');



echo "<div class=\"border1\"><table class=\"page\"><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Critical Hit</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This skill provides the Light master knowledge for an increased chance for a critical hit and increased critical hit damage.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $stcritical;



echo "</td><td class=\"page\"><form action=\"addlightt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"critical\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Ultimate Restistance</h2></td></tr><tr><td class=\"left\" colspan=\"2\">As a Light master learns to summon the light, he uses it to become resistant to all destructive forces. You must be a Light Magic Master to benefit from this skill.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $stresist;

echo "</td><td class=\"page\"><form action=\"addlightt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"resist\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Regeneration</h2></td></tr><tr><td class=\"left\" colspan=\"2\">you learn how to use the light to regenerate your life and mana. You must be a Light Magic Master to benefit from this skill.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $stregenerate;



echo "</td><td class=\"page\"><form action=\"addlightt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"regenerate\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Ultimate Revive</h2></td></tr><tr><td class=\"left\" colspan=\"2\">Occassionally you are blessed by a burst of Light that revives your life and mana. You must be a Light Magic Master to benefit from this skill.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $strevive;



echo "</td><td class=\"page\"><form action=\"addlightt.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"revive\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr></table></div>";



?>