<?php

include ('php/getpole.php');



echo "<div class=\"border1\"><table class=\"page\"><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Critical Hit</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This skill provides the pole-arms master knowledge for an increased chance for a critical hit and increased critical hit damage.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $spcritical;



echo "</td><td class=\"page\"><form action=\"addpole.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"critical\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Long-Arm</h2></td></tr><tr><td class=\"left\" colspan=\"2\">You learn to keep your opponent at a distance by using your weapon as an extension of your arm.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $splongarm;

echo "</td><td class=\"page\"><form action=\"addpole.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"longarm\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Catapult</h2></td></tr><tr><td class=\"left\" colspan=\"2\">You learn how to use your Pole-Arm weapon as a lever to catapult your enemy into the air causing him to recover one turn.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $spcatapult;



echo "</td><td class=\"page\"><form action=\"addpole.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"catapult\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>Long Sweep Combo</h2></td></tr><tr><td class=\"left\" colspan=\"2\">This attack sweeps your opponent off his feet so you can follow with a critical blow to the head while the enemy is down.</td></tr><tr><td class=\"left\">Skill Points Spent: ";



echo $spsweep;



echo "</td><td class=\"page\"><form action=\"addpole.php?";



echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"sweep\" /><input class=\"small\" type=\"submit\" value=\"Spend Point\" /></form></td></tr></table></td></tr></table></div>";



?>