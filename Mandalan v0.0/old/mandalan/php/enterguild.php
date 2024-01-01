<?php

$response=strip_tags($_POST["type"]);
$query=sprintf("select * from flags where username='%s';", mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
  {
echo "<table class=\"page\"><tr><td class=\"border\">

<table class=\"page\"><tr><td class=\"page\"><h2>The Guild</h2></td></tr>";

if ($row['guild']>0)
{
echo "<tr><td class=\"page\">
<form action=\"dialogue/alicia.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Talk to Alicia\" /></form></td></tr>";
}


echo "<tr><td class=\"page\">
<form action=\"maingraphics.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Leave\" /></form></td></tr></table></td></tr></table></body></html>";
}

?>