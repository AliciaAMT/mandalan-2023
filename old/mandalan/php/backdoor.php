<?php

$query = sprintf("select * from inventory where itemname='Back Door Key' and username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
  {

  if ($row['keep']==1)
{
echo "<table class=\"page\"><tr><td class=\"border\">

<table class=\"page\"><tr><td class=\"page\"><h2>House of Elders</h2><br />

</tr></td><tr><td class=\"left\">You unlock the door and quietly enter the House of Elders.</td></tr><tr><td class=\"page\">";


$query=sprintf("update stats set map='hoe', xaxis=2, yaxis=3, mapdimensions=33 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);


echo "<form action=\"maingraphics.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Leave\" /></form></td></tr></table></td></tr></table></body></html>";
}
else
{
echo "<table class=\"page\"><tr><td class=\"border\">

<table class=\"page\"><tr><td class=\"page\"><h2>House of Elders</h2><br />

</tr></td><tr><td class=\"left\">It looks like this door needs a key. You cannot pick this lock.</td></tr><tr><td class=\"page\">

<form action=\"maingraphics.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Leave\" /></form></td></tr></table></td></tr></table></body></html>";
}



}

?>