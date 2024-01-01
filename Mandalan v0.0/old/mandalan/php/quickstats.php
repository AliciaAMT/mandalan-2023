<?php
echo "<table class=\"page\"><tr><td class=\"center\"><img src=\"images/";

include('php/portrait.php'); 

echo "i.png\" border=\"0\" /></td><td class=\"center\">";

include('php/name.php');

echo "<br>";

include('php/title.php');

echo "</td></tr><tr><td class=\"center\"><img src=\"images/hourglass.png\" border=\"0\" /></td><td class=\"page\">Level ";

include ('php/level.php');

echo "<br>";

include ('php/experience.php');

echo "</td></tr><tr><td class=\"center\"><img src=\"images/life.png\" border=\"0\" /></td><td class=\"page\">";

include ('php/life.php');

echo "/";

include ('php/maxlife.php'); 

echo "</td></tr><tr><td class=\"center\"><img src=\"images/mana.png\" border=\"0\" /></td><td class=\"page\">";

include ('php/mana.php'); 

echo "/";

include ('php/maxmana.php'); 

echo "</td></tr><tr><td class=\"center\"><img src=\"images/gold.png\" border=\"0\" /></td><td class=\"page\">";

include ('php/gold.php');

echo "</td></tr></table>";

?>