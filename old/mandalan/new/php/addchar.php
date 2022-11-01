<?php

$name=strip_tags($_POST["name"]);

$query=sprintf("select * from accounts where email='%s';", mysql_real_escape_string($email));

$result = mysql_query($query);

while($row = mysql_fetch_array($result))
	{

if ($row['char1']=="none")
{
$querys = sprintf("update accounts set char1='%s' where email='%s';", 
mysql_real_escape_string($name),
mysql_real_escape_string($email)

);

mysql_query($querys);
}
else
{
if ($row['char2']=="none")
{
$querys = sprintf("update accounts set char2='%s' where email='%s';", 
mysql_real_escape_string($name),
mysql_real_escape_string($email)

);

mysql_query($querys);
}

else
{
if ($row['char3']=="none")
{
$querys = sprintf("update accounts set char3='%s' where email='%s';", 
mysql_real_escape_string($name),
mysql_real_escape_string($email)

);

mysql_query($querys);
}
else
{

if ($row['char4']=="none")
{
$querys = sprintf("update accounts set char4='%s' where email='%s';", 
mysql_real_escape_string($name),
mysql_real_escape_string($email)

);

mysql_query($querys);
}
else
{

if ($row['char5']=="none")
{
$querys = sprintf("update accounts set char5='%s' where email='%s';", 
mysql_real_escape_string($name),
mysql_real_escape_string($email)

);

mysql_query($querys);
}
else
{

if ($row['char6']=="none")
{
$querys = sprintf("update accounts set char6='%s' where email='%s';", 
mysql_real_escape_string($name),
mysql_real_escape_string($email)

);

mysql_query($querys);
}
else
{

die ("You do not have an empty character slot. You must delete a character before you create a new one.<br /><table class=\"page\"><tr><td class=\"page\"><form action=\"choosecharacter.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back\" /></form></td></tr></table></body></html>");

}


}


}
}
}
}
}

?>