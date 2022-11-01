<?php 

include ('php/fillwater.php');

include ('php/getcondition.php');
if ($condition=="Plagued")
{
die ("<table class=\"page\"><tr><td class=\"center\"><img src=\"images/water.png\" /><br /><h3>Water Break</h3><br />You fill your containers, but you cannot heal because you are Plagued! You must sleep in a bed to get rid of the Plague.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"center\"><form action=\"maingraphics.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table></td></tr></table></body></html>");
}

$query=sprintf("select * from stats where username='%s';", mysql_real_escape_string($username));

$result = mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  
  
  include ('php/sleepr.php');
  
  echo "<table class=\"page\"><tr><td class=\"center\"><img src=\"images/water.png\" /><br /><h3>Water Break</h3>You drink until you are refreshed, and you fill all of your water containers.</td></tr><tr><td class=\"center\">
<table class=\"page\"><tr><td class=\"center\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>
</td></tr></table";
  
  }
?>