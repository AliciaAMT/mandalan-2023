<?php

$query = sprintf("select gold from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
  {


echo "<table class=\"page\"><tr><td class=\"border\">

<table class=\"page\"><tr><td class=\"page\"><h2>Join Guild</h2></td></tr><tr><td class=\"left\">Guild membership costs 500 gold. Once in the guild, you may complete quests that lead to special powers through the tatoos you are given.";

if ($row['gold']>499)
{
echo "<form action=\"joinguild2.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Join Guild\" /></form></td></tr>";
}


echo "</td></tr><tr><td class=\"page\">
<form action=\"maingraphics.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Leave\" /></form></td></tr></table></td></tr></table></body></html>";

}
?>