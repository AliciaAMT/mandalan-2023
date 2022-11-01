<?php include ('php/headert1.php'); ?>

<?php include ('php/westt.php') ?>

<?php include ('php/main1t.php'); ?>

<?php include ('php/mapt.php'); ?>
<?php

echo "</td><td class=\"border\">";

echo "<table class=\"page\"><tr><td class=\"page\"><h2>Tile Options</h2></td></tr><tr><td class=\"border\">
<h3>People and Enemies</h3>";

include ('php/npct.php');

echo "</td></tr><tr><td class=\"border\">
<h3>Objects</h3>";
?>
<?php include ('php/objectst.php'); ?>
</td></tr><tr><td class="border">
<h3>Portals</h3>
<?php include ('php/portalt.php'); ?>
</td></tr></table>

</td><td class="border">
<table class="page"><tr><td class="page"><h2>Quick Stats</h2></td></tr>
<tr><td class="border"><h3>Character</h3>
<?php
include ('php/name.php'); 
include ('php/getstats.php');

echo " the ";
include ('php/title.php');
echo "</td></tr>
<tr><td class=\"border\"><h3>Level ";
include ('php/level.php');
echo "</h3></td></tr><tr><td class=\"border\"><h3>Experience</h3>";
include ('php/experience.php');
echo "</td></tr>
<tr><td class=\"border\"><h3>Life</h3>";
include ('php/life.php');
echo " of ";
include ('php/maxlife.php');
echo "</td></tr>
<tr><td class=\"border\"><h3>Mana</h3>";
include ('php/mana.php');
echo " of ";
include ('php/maxmana.php');

echo "</td></tr><tr><td class=\"border\"><h3>Gold ";
include ('php/gold.php');
echo "</h3>
</td></tr>
</td></tr></table>";
?>


</td><td class="border">
<table class="page"><tr><td class="page"><h2>Menu</h2></td></tr>
<tr><td class="border"><b><a href="statst.php">Statistics</a></b></td></tr>
<tr><td class="border"><b><a href="inventory/inventoryt.php">Inventory</a></b></td></tr>
<tr><td class="border"><b><a href="spells/spellbookt.php">Spellbook</a></b></td></tr>
<tr><td class="border"><b><a href="skills/skillst.php">Skills</a></b></td></tr>
<tr><td class="border"><b><a href="cook/cookbookt.php">Cookbook</a></b></td></tr>
<tr><td class="border"><b><a href="quests/questst.php">Quest Journal</a></b></td></tr>

</td></tr></table>

</tr></tr></table></body></html>