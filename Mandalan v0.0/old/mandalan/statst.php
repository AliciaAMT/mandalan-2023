<?php include ('php/headert1.php'); ?>
<?php
include ('php/getstats.php');
echo "<table class=\"page\">

<tr>

<td class=\"border\">

<table class=\"page\"><tr><td class=\"page\" colspan=\"2\">
<h2>";

include ('php/name.php');

echo "</h2>

</td></tr><tr><td class=\"left\">Condition:</td><td class=\"left\">";

include ('php/cond.php');

echo "</td></tr><tr>

<td class=\"left\">

Title

</td>

<td class=\"left\">";

include ('php/title.php');
echo "</td></tr>

<tr><td class=\"left\">

Class</td><td class=\"left\">";

include('php/class.php');

echo "</td></tr>

<tr><td class=\"left\">Race</td><td class=\"left\">";

include('php/race.php');
echo "</td></tr>

<tr><td class=\"left\">

Experience 

</td>

<td class=\"left\">";

include ('php/experience.php');

echo "</td>

</tr>

<tr><td class=\"left\">

Level 

</td>

<td class=\"left\">";

include ('php/level.php');

echo "</td>

</tr>

<tr><td class=\"left\">

Life

</td>

<td class=\"left\">";

include ('php/life.php');
echo " / ";

include ('php/maxlife.php');

echo "</td></tr>

<tr><td class=\"left\">

Mana

</td>

<td class=\"left\">";

include ('php/mana.php');

echo " / ";
include ('php/maxmana.php');
echo "</td></tr>

<tr><td colspan=\"2\" class=\"center\"><br /><h2>Secondary Skills</h2></td></tr>

<tr><td class=\"left\">

Magic Find

</td><td class=\"left\">";

include ('php/magicfind.php');

echo "</td></tr>

<tr><td class=\"left\">

Lockpicking

</td><td class=\"left\">";

include ('php/lockpicking.php');

echo "</td></tr>

<tr><td class=\"left\">

Cooking

</td><td class=\"left\">";

include ('php/cooking.php');


echo "</td></tr>

<tr><td class=\"left\">

Alchemy

</td><td class=\"left\">";


include ('php/alchemy.php');

echo "</td></tr>

<tr><td class=\"left\">

Enchanting

</td><td class=\"left\">";

include ('php/enchanting.php');
echo "</td></tr>

</table>


</td><td class=\"border\">



<table class=\"page\">

<tr><td colspan=\"2\" class=\"center\"><h2>Main Stats</h2></td></tr>



<tr><td class=\"left\">

Armor

</td><td class=\"left\">";



include ('php/defense.php');



echo "</td>

</tr>

<tr><td class=\"left\">

Damage

</td><td class=\"left\">";



include ('php/damage.php');



echo "</td></tr>

<tr><td class=\"left\">Critical</td><td class=\"left\">";

include ('php/critical.php');

echo "</td></tr>

<tr><td class=\"left\">Speed</td><td class=\"left\">";

include ('php/speed.php');

echo "</td></tr>

<tr><td class=\"left\">Accuracy</td><td class=\"left\">";

include ('php/accuracy.php');


echo "</td></tr>

<tr><td class=\"left\">Strength</td><td class=\"left\">";



include ('php/strength.php');



echo "</td></tr>

<tr><td class=\"left\">Agility</td><td class=\"left\">";



include ('php/agility.php');



echo "</td></tr>

<tr><td class=\"left\">Wisdom</td><td class=\"left\">";



include ('php/wisdom.php');



echo "</td></tr>

<tr><td class=\"left\">Luck</td><td class=\"left\">";



include ('php/luck.php');



echo "</td></tr>



<tr><td class=\"left\">Wins</td><td class=\"left\">";



include ('php/wins.php');



echo "</td></tr>

<tr><td class=\"left\">

Deaths

</td><td class=\"left\">";



include ('php/deaths.php');



echo "</td></tr>

</table>

</td><td class=\"border\">

<table class=\"page\">

<tr><td class=\"page\" colspan=\"2\"><h2>Resistances</h2></td></tr>

<tr><td class=\"left\">Fire</td><td class=\"left\">";


include ('php/fireresist.php');



echo "</td></tr>

<tr><td class=\"left\">Water</td><td class=\"left\">";



include ('php/iceresist.php');



echo "</td></tr>

<tr><td class=\"left\">Air</td><td class=\"left\">";



include ('php/lightresist.php');



echo "</td></tr>

<tr><td class=\"left\">Earth</td><td class=\"left\">";



include ('php/earthresist.php');


echo "</td></tr>



<tr><td class=\"left\">Dark Magic</td><td class=\"left\">";



include ('php/darkresist.php');



echo "</td></tr>

<tr><td class=\"left\">Poison</td><td class=\"left\">";



include ('php/poisonresist.php');


echo "</td></tr>

<tr><td class=\"left\">Immobilize</td><td class=\"left\">";


include ('php/holdresist.php');



echo "</td></tr>

<tr><td class=\"left\">Mind</td><td class=\"left\">";



include ('php/mindresist.php');



echo "</td></tr>

<tr><td class=\"left\">Critical Hit</td><td class=\"left\">";



include ('php/criticalresist.php');



echo "</td></tr>

<tr><td class=\"left\">Bleeding</td><td class=\"left\">";



include ('php/bleedresist.php');



echo "</td></tr>

<tr><td class=\"page\" colspan=\"2\">



<form action=\"maingraphict.php?";

echo time(); echo "\" method=\"post\">

<table class=\"page\"><tr><td class=\"page\">

<input class=\"small\" type=\"submit\" value=\"Back to Map\" /></td></tr></table>

</form>




</td>

</tr>

</table>



</td></tr></table>

</body>

</html>";

?>