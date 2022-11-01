<?php

$query = sprintf("select fight from enemy where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  if ($row['fight']==0)
{
die ("<table class=\"page\"><tr><td class=\"border\">Your enemy has fled!<br /><br  /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"../maingraphict.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table></td></tr></table></td></tr></table></body></html>");
}
  }
  ?>