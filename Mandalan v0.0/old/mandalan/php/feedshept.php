<?php

$query=sprintf("Update flags set shepfeed=1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("Update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);


$query=sprintf("Update inventory set keep=keep-1 where username='%s' and itemname='Raw Meat';", mysql_real_escape_string($username));
mysql_query($query);


//echo****************

echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Feed Old Shep:</h3></td></tr><tr><td class=\"center\">
You Feed Old Shep a piece of Raw Meat, and he gobbles it up gratefully.</td></tr>
<tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><h4>Experience: </h4></td><td class=\"page\"><h4>+5</h4></td></tr></table></td></tr>
<tr><td class=\"page\">";
echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"back\" action=\"maingraphict.php?".time();
echo "\" method=\"get\"><input type=\"submit\" value=\"Continue\" class=\"small\"></form>";
  
echo "</td></tr></table></td></tr></table>";


?>