<?php

$query = sprintf("select * from enemy where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  if ($row['enemylife']<1)
{
die ("<table class=\"page\"><tr><td class=\"border\">Your enemy has died!<br /><br  /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"loott.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Loot Body\" /></form></td></tr></table></td></tr></table></td></tr></table></body></html>");
}
  }
  ?>