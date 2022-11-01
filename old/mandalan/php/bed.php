<?php

echo "<table class=\"page\"><tr><td class=\"center\"><img src=\"images/bed.png\" /></td></tr><tr><td class=\"center\">";

echo "<form name=\"sleep\" action=\"bedsleep.php?".time();
echo "\" method=\"get\"><input type=\"submit\" value=\"Sleep\" class=\"small\"></form>";
  
echo "</td></tr><tr><td class=\"center\">";

echo "<form name=\"search\" action=\"object.php?".time();
echo "\" method=\"get\"><input type=\"submit\" value=\"Search\" class=\"small\"></form>";

echo "</td></tr></table>";

?>