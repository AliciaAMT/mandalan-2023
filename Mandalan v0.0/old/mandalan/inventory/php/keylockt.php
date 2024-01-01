<?php

$keylock=strip_tags($_GET["keylock"]);

$query=sprintf("select quest2 from flags where username='%s';", mysql_real_escape_string($username));

$result = mysql_query($query);

while($row = mysql_fetch_array($result))

  {

if ($keylock=="Locked Box" and $row['quest2']==3)

{

echo "<table class=\"page\"><tr><td class=\"center\"><h3>Unlock Box</h3></td></tr><tr><td class=\"left\"><h3>You unlock the box with the key and find:</h3></td><td class=\"center\">
<h3>Sharpened Bone Dagger</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr><tr><td class=\"left\"><h3>Quest Completed:</h3></td><td class=\"left\"><h3>\"The Hidden Key Quest\"</h3></td></tr></table>";

  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));

  mysql_query ($query);

  
include ('php/thehiddenkey.php');
//remove key

//remove box

//add bone dagger

  
  $query=sprintf("update flags set quest2=4 where username='%s';", mysql_real_escape_string($username));

  mysql_query ($query);

echo "</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\">";

}


if ($keylock=="Locked Box" and $row['quest2']!=3)
{
echo "<table class=\"page\"><tr><td class=\"center\"><h3>Unlock Box</h3></td></tr><tr><td class=\"left\">You do not have the appropriate key. You cannot unlock the box at this time.</td></tr></table>";
}
echo "<form action=\"keept.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Inventory\" /></form></td></tr><tr><td class=\"page\">";



echo "<form action=\"../maingraphict.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form>";

echo "</td></tr></table></td></tr></table>";

}

?>