<?php

echo "<table class=\"page\"><tr><td class=\"center\"></td></tr><tr><td class=\"center\">";

echo "<form name=\"sleep\" action=\"bedsleept.php?".time();
echo "\" method=\"get\"><input type=\"submit\" value=\"Sleep\" class=\"small\"></form>";
  
echo "</td></tr><tr><td class=\"center\">";

echo "<form name=\"search\" action=\"objectt.php?".time();
echo "\" method=\"get\"><input type=\"submit\" value=\"Search\" class=\"small\"></form>";

echo "</td></tr></table>";

?>