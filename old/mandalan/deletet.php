<?php

$email=$_COOKIE["email"];

include ('php/headertf.php'); 

include ('php/connect.php');

$name=strip_tags($_POST["name"]);
$char=strip_tags($_POST["char"]);

echo "<table class=\"page\"><tr><td class=\"page\"><b>".$name." has been deleted!</b>";

echo "<table class=\"page\"><tr><td class=\"page\"><form action=\"choosecharacter2.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Ok\" /></form></td></tr></table></td></tr></table>";

if ($char=="char1")
{

$querys = sprintf("update accounts set char1='none' where char1='%s' and email='%s';", 
mysql_real_escape_string($name),
mysql_real_escape_string($email)
);
mysql_query($querys);
}
else
{
if ($char=="char2")
{

$querys = sprintf("update accounts set char2='none' where char2='%s' and email='%s';", 
mysql_real_escape_string($name),
mysql_real_escape_string($email)
);
mysql_query($querys);
}
else
{

if ($char=="char3")
{

$querys = sprintf("update accounts set char3='none' where char3='%s' and email='%s';", 
mysql_real_escape_string($name),
mysql_real_escape_string($email)
);
mysql_query($querys);
}

else
{
if ($char=="char4")
{

$querys = sprintf("update accounts set char4='none' where char4='%s' and email='%s';", 
mysql_real_escape_string($name),
mysql_real_escape_string($email)
);
mysql_query($querys);
}

else
{
if ($char=="char5")
{

$querys = sprintf("update accounts set char5='none' where char5='%s' and email='%s';", 
mysql_real_escape_string($name),
mysql_real_escape_string($email)
);
mysql_query($querys);
}
else
{
if ($char=="char6")
{

$querys = sprintf("update accounts set char6='none' where char6='%s' and email='%s';", 
mysql_real_escape_string($name),
mysql_real_escape_string($email)
);
mysql_query($querys);
}
}
}
}
}
}

?>

</body></html>


