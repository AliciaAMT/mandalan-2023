<?php

//while statement**********

include ('php/getitems.php');

$query=sprintf("select shepfeed from flags where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))

{


if ($row['shepfeed']==0)
{
echo "<table class=\"page\"><tr><td class=\"center\"><img src=\"images/shep.png\" /></td></tr><tr><td class=\"center\">
<h3>You approach Old Shep, and he appears to want something. You notice his food dish is empty aside from a strange object you cannot make out.</h3>
</td></tr><tr><td class=\"center\">";

if ($rawmeat>0)
{
echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"feedshep\" action=\"feedshep.php?".time();
echo "\" method=\"get\"><input type=\"submit\" value=\"Feed Shep Raw Meat\" class=\"small\"></form>";
  
echo "</td></tr><tr><td class=\"center\">";

echo "<form name=\"petshep\" action=\"petshep.php?".time();
echo "\" method=\"get\"><input type=\"submit\" value=\"Pet Shep\" class=\"small\"></form>";
  
echo "</td></tr></table></td></tr></table>";
}

else
{
echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"leaveshep\" action=\"maingraphics.php?".time();
echo "\" method=\"get\"><input type=\"submit\" value=\"Leave Shep Alone\" class=\"small\"></form>";
  
echo "</td></tr><tr><td class=\"center\">";

echo "<form name=\"petshep\" action=\"petshep.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Pet Shep\" class=\"small\"></form>";

echo "</td></tr></table></td></tr></table>";

}

}

else

{
echo "<table class=\"page\"><tr><td class=\"center\"><img src=\"images/shep.png\" /></td></tr><tr><td class=\"center\">
<h3>You approach Old Shep, and he appears to be quite happy to see you.</h3>
</td></tr><tr><td class=\"center\">";


echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"leaveshep\" action=\"maingraphics.php?".time();
echo "\" method=\"get\"><input type=\"submit\" value=\"Leave Shep Alone\" class=\"small\"></form>";
  
echo "</td></tr><tr><td class=\"center\">";

echo "<form name=\"petshep\" action=\"petshep.php?".time();
echo "\" method=\"get\"><input type=\"submit\" value=\"Pet Shep\" class=\"small\"></form>";
  
echo "</td></tr></table></td></tr></table>";

}

}

?>