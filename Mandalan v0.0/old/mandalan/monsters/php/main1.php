<?php

echo "<table class=\"page\" width=\"96%\"><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><img src=\"../images/";

include ('../php/portrait.php');

echo ".png\" /><br />";

include ('../php/name.php');

echo "<br /><br /></td></tr><tr><td class=\"page\"><img src=\"../images/life.png\" border=\"0\" /></td><td class=\"page\">";

include ('../php/life.php');

echo "/";

include ('../php/maxlife.php');

echo "</td></tr><tr><td class=\"page\"><img src=\"../images/mana.png\" border=\"0\" /></td><td class=\"page\">";

include ('../php/mana.php');

echo "/";

include ('../php/maxmana.php');

echo "</td></tr><tr><td class=\"page\" colspan=\"2\">Condition: ";

include ('../php/cond.php');

echo "</td></tr></table></td><td class=\"border\"><table class=\"page\"><tr><td class=\"page\"><form action=\"attack.php?";
echo time(); 
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Attack\" /></form></td></tr><tr><td class=\"page\"><form action=\"qspell.php?";
echo time(); 
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Quickspell\" /></form></td></tr><tr><td class=\"page\"><form action=\"../spells/spellbook.php?";
echo time(); 
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Spellbook\" /></form></td></tr><tr><td class=\"page\"><form action=\"heal.php?";
echo time(); 
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Heal\" /></form></td></tr><tr><td class=\"page\"><form action=\"../inventory/useitem.php?";
echo time(); 
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Use Item\" /></form></td></tr><tr><td class=\"page\"><form action=\"flee.php?";
echo time(); 
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Flee\" /></form></td></tr></table></td><td class=\"border\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><img src=\"../images/";

include ('php/enemy.php');

echo ".png\" height=\"128px\" /><br />";

include ('php/enemyname.php');

echo " Level ";

include ('php/enemylevel.php');

echo "<br /><br /></td></tr><tr><td class=\"page\"><img src=\"../images/life.png\" border=\"0\" /></td><td class=\"page\">";

include ('php/enemylife.php');

echo "/";

include ('php/enemymaxlife.php');

echo "</td></tr><tr><td class=\"page\"><img src=\"../images/mana.png\" border=\"0\" /></td><td class=\"page\">";

include ('php/enemymana.php');

echo "/";

include ('php/enemymaxmana.php');

echo "</td></tr><tr><td class=\"page\" colspan=\"2\">Condition: ";

include ('php/enemycond.php');

echo"</td></tr></table></td></tr><tr><td colspan=\"3\" class=\"border\" height=\"100px\"><div class=\"fightlog\">";

include ('php/eventlog.php');

echo "</div></td></tr></table></body></html>";

?>