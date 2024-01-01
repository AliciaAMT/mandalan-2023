<?php

$query=sprintf("select shepfeed, sheppet from flags where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))

{

if ($row['shepfeed']>0)
{

if ($row['sheppet']==0)
{
echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Pet Old Shep:</h3></td></tr><tr><td class=\"center\">
Old Shep plays with you and affectionately licks your face. You gain +2 to Luck!</td></tr><tr><td class=\"page\">";
echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"back\" action=\"maingraphics.php?".time();
echo "\" method=\"get\"><input type=\"submit\" value=\"Continue\" class=\"small\"></form>";
  
echo "</td></tr></table></td></tr></table>";


$query=sprintf("Update flags set sheppet=1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("Update stats set luck=luck+2 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

}

else 
{
echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Pet Old Shep:</h3></td></tr><tr><td class=\"center\">
Old Shep plays with you and affectionately licks your face.</td></tr><tr><td class=\"page\">";
echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"back\" action=\"maingraphics.php?".time();
echo "\" method=\"get\"><input type=\"submit\" value=\"Continue\" class=\"small\"></form>";
  
echo "</td></tr></table></td></tr></table>";

}
}

else

{
//shep bites you and you lose 5 life
echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Pet Old Shep:</h3></td></tr><tr><td class=\"center\">
Old Shep snarls and bites you! You lose 5 life! Old Shep is in a bad mood for some reason.</td></tr><tr><td class=\"page\">";
echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"back\" action=\"maingraphics.php?".time();
echo "\" method=\"get\"><input type=\"submit\" value=\"Continue\" class=\"small\"></form>";
  
echo "</td></tr></table></td></tr></table>";


$query=sprintf("Update stats set life=life-5 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

}

}
?>