<?php

echo "<table class=\"page\"><tr><td class=\"border\">";

echo "<table class=\"page\"><tr><td class=\"page\"><h2>Map</h2></td></tr>";

echo "<tr><td class=\"border\"><h3>Coordinates</h3>";

include ('php/coordinates.php');

echo "<br /></td></tr>";

echo "<tr><td class=\"border\"><h3>Tile Description</h3>";

include ('php/tiledescrip.php');

echo "</br ></td></tr>";

echo "<tr><td class=\"border\"><h3>Movement</h3>";

include ('php/movet.php');

echo "</td></tr>";

echo "</td></tr></table>";

?>
