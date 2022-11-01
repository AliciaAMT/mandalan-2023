<?php


$query = sprintf("select guild from flags where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
  {

  if ($row['guild']==0)
  {
echo "<table class=\"page\"><tr><td class=\"border\">

<table class=\"page\"><tr><td class=\"page\"><h2>Join Guild</h2></td></tr><tr><td class=\"left\">Congratulations! You are now a member of the guild. Begin your quests by talking to the guildmaster, Alicia.

<form action=\"dialogue/alicia.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Talk to Alicia\" /></form></td></tr>";

$query=sprintf("update flags set guild=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);


$query=sprintf("update stats set gold=gold-500 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

echo "</td></tr><tr><td class=\"page\">
<form action=\"maingraphics.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Leave\" /></form></td></tr></table></td></tr></table></body></html>";
}

else
{
echo "<table class=\"page\"><tr><td class=\"border\">

<table class=\"page\"><tr><td class=\"page\"><h2>Join Guild</h2></td></tr><tr><td class=\"left\">You are already a member of the guild. Begin quests by entering and speaking to guildmaster Alicia.

<form action=\"dialogue/alicia.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Talk to Alicia\" /></form></td></tr>";


echo "</td></tr><tr><td class=\"page\">
<form action=\"maingraphics.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Leave\" /></form></td></tr></table></td></tr></table></body></html>";


}
}
?>