<?php include ('php/header.php'); ?>

<table class="page">

<tr>

<td class="page"><div class="border1">

<table class="page"><tr><td class="page" colspan="2">
<h2><?php include ('php/name.php'); ?></h2>

</td></tr><tr><td class="left">Condition:</td><td class="left"><?php include ('php/cond.php'); ?>

</td></tr><tr>

<td class="left">

Title

</td>

<td class="left">

<?php

include ('php/title.php');

?>

</td></tr>

<tr><td class="left">

Class</td><td class="left"><?php include('php/class.php'); ?></td></tr>

<tr><td class="left">Race</td><td class="left"><?php include('php/race.php'); ?></td></tr>

<tr><td class="left">

Exp. 

</td>

<td class="left">

<?php

include ('php/experience.php');

?>

</td>

</tr>

<tr><td class="left">

Level 

</td>

<td class="left">

<?php

include ('php/level.php');

?>

</td>

</tr>

<tr><td class="left">

Life

</td>

<td class="left">

<?php

include ('php/life.php');

?> / <?php

include ('php/maxlife.php');

?>

</td></tr>

<tr><td class="left">

Mana

</td>

<td class="left">

<?php

include ('php/mana.php');

?> / <?php include ('php/maxmana.php'); ?>

</td></tr></table></div>



</td><td class="page"><div class="border1">



<table class="page"><tr><td class="page" colspan="2">



<form action="maingraphict.php? <?php echo time(); ?>" method="post">

<table class="page"><tr><td class="page">

<input class="small" type="submit" value="Back to Map" /></td></tr></table>

</form>

</td>

</tr>

<tr><td colspan="2" class="center"><h2>Main Stats</h2></td></tr>



<tr><td class="left">

Armor

</td><td class="left">

<?php

include ('php/defense.php');

?>

</td>

</tr>

<tr><td class="left">

Damage

</td><td class="left">

<?php

include ('php/damage.php');

?>

</td></tr>

<tr><td class="left">Critical</td><td class="left"><?php

include ('php/critical.php');

?></td></tr>

<tr><td class="left">Speed</td><td class="left">

<?php

include ('php/speed.php');

?>

</td></tr>

<tr><td class="left">Accuracy</td><td class="left">

<?php

include ('php/accuracy.php');

?>

</td></tr>

<tr><td class="left">Strength</td><td class="left">

<?php

include ('php/strength.php');

?>

</td></tr>

<tr><td class="left">Agility</td><td class="left">

<?php

include ('php/agility.php');

?>

</td></tr>

<tr><td class="left">Wisdom</td><td class="left">

<?php

include ('php/wisdom.php');

?>

</td></tr>

<tr><td class="left">Luck</td><td class="left">

<?php

include ('php/luck.php');

?>

</td></tr>



<tr><td class="left">Wins</td><td class="left">

<?php

include ('php/wins.php');

?>

</td></tr>

<tr><td class="left">

Deaths

</td><td class="left">

<?php

include ('php/deaths.php');

?>

</td></tr>



<tr><td colspan="2" class="center"><br /><h2>Secondary Skills</h2></td></tr>

<tr><td class="left">

Magic Find

</td><td class="left">

<?php

include ('php/magicfind.php');

?>

</td></tr>

<tr><td class="left">

Lockpicking

</td><td class="left">

<?php

include ('php/lockpicking.php');

?>

</td></tr>

<tr><td class="left">

Cooking

</td><td class="left">

<?php

include ('php/cooking.php');

?>

</td></tr>

<tr><td class="left">

Alchemy

</td><td class="left">

<?php

include ('php/alchemy.php');

?>

</td></tr>

<tr><td class="left">

Enchanting

</td><td class="left">

<?php

include ('php/enchanting.php');

?>

</td></tr>

</table></div>



</td><td class="page"><div class="border1">



<table class="page">



<tr><td class="page" colspan="2"><h2>Resistances</h2></td></tr>



<tr><td class="left">Fire</td><td class="left">

<?php

include ('php/fireresist.php');

?>

</td></tr>

<tr><td class="left">Water</td><td class="left">

<?php

include ('php/iceresist.php');

?>

</td></tr>

<tr><td class="left">Air</td><td class="left">

<?php

include ('php/lightresist.php');

?>

</td></tr>

<tr><td class="left">Earth</td><td class="left">

<?php

include ('php/earthresist.php');

?>

</td></tr>



<tr><td class="left">Dark Magic</td><td class="left">

<?php

include ('php/darkresist.php');

?>

</td></tr>

<tr><td class="left">Poison</td><td class="left">

<?php

include ('php/poisonresist.php');

?>

</td></tr>

<tr><td class="left">Immobilize</td><td class="left">

<?php

include ('php/holdresist.php');

?>

</td></tr>

<tr><td class="left">Mind</td><td class="left">

<?php

include ('php/mindresist.php');

?>

</td></tr>

<tr><td class="left">Critical Hit</td><td class="left">

<?php

include ('php/criticalresist.php');

?>

</td></tr>

<tr><td class="left">Bleeding</td><td class="left">

<?php

include ('php/bleedresist.php');

?>

</td></tr>



</table>

</div>

</td></tr></table>

</body>

</html>