<?php

$query=sprintf("select homefireplace from flags where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{

echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You Search the Fireplace...</h3></td></tr>";

if ($row['homefireplace']==1)
  {
echo "<tr><td class=\"page\" colspan=\"2\">Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
}
    
  if ($row['homefireplace']==0)
  {
  echo "</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Tinderbox</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Firewood x3</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set homefireplace=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
    
  $query=sprintf("update stats set experience=experience+10 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/home32.php');
}
    
  }
  
  
?>