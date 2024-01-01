<?php

echo "<table class=\"page\" width=\"98%\"><tr><td class=\"page\" colspan=\"3\">

<h2>Fightlog</h2></tr></td><tr><td colspan=\"3\" class=\"border\" height=\"100px\"><div class=\"fightlog\">";

include ('php/eventlog.php');

echo "</div></td></tr><tr><td class=\"border\">



<table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>";

include ('../php/name.php');
 
echo "</h2></td></tr><tr><td class=\"page\"><h3>Life: </h3></td><td class=\"page\"><h3>";

include ('../php/life.php');

echo " of ";

include ('../php/maxlife.php');

echo "</h3></td></tr><tr><td class=\"page\"><h3>Mana: </h3></td><td class=\"page\"><h3>";

include ('../php/mana.php');

echo " of ";

include ('../php/maxmana.php');

echo "</h3></td></tr><tr><td class=\"page\" colspan=\"2\"><h3>Condition: ";

include ('../php/cond.php');

echo "</h3></td></tr></table>



</td><td class=\"border\">


<table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>";
include ('php/enemyname.php');

echo " Level ";

include ('php/enemylevel.php');

echo "</h2></td></tr><tr><td class=\"page\"><h3>Life: </h3></td><td class=\"page\"><h3>";

include ('php/enemylife.php');

echo " of ";

include ('php/enemymaxlife.php');

echo "</h3></td></tr><tr><td class=\"page\"><h3>Mana: </h3></td><td class=\"page\"><h3>";

include ('php/enemymana.php');

echo " of ";

include ('php/enemymaxmana.php');

echo "</h3></td></tr><tr><td class=\"page\" colspan=\"2\"><h3>Condition: ";

include ('php/enemycond.php');

echo"</h3></td></tr></table>

</td><td class=\"border\">


<table class=\"page\"><tr><td class=\"page\"><h2>Turn Options</h2></td></tr><tr><td class=\"page\"><form action=\"attackt.php?";
echo time(); 
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Attack\" /></form></td></tr><tr><td class=\"page\"><form action=\"qspellt.php?";
echo time(); 
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Quickspell\" /></form></td></tr><tr><td class=\"page\"><form action=\"../spells/spellbookt.php?";
echo time(); 
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Spellbook\" /></form></td></tr><tr><td class=\"page\"><form action=\"healt.php?";
echo time(); 
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Heal\" /></form></td></tr><tr><td class=\"page\"><form action=\"../inventory/useitemt.php?";
echo time(); 
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Use Item\" /></form></td></tr><tr><td class=\"page\"><form action=\"fleet.php?";
echo time(); 
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Flee\" /></form></td></tr></table>

</td></tr></table></body></html>";

?>