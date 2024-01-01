<?php

$email=strip_tags($_POST["email"]);
$password=strip_tags($_POST["password"]);

$query8 = sprintf("select * from accounts where email='%s';", mysql_real_escape_string($email));

$result8 = mysql_query($query8);

$row=mysql_fetch_array($result8);

if (!$row)
{
die ("There is no account matching that email.<table class=\"page\"><tr><td class=\"page\"><form action=\"logint.php\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Try Again\" /></form></td></tr></table></body></html>");
}

$query8 = sprintf("select * from accounts where email='%s';", mysql_real_escape_string($email));

$result8 = mysql_query($query8);

while ($row=mysql_fetch_array($result8))

{

if ($password!=$row['password'])
{
die ("I'm sorry, that is the wrong password for that email address.<table class=\"page\"><tr><td class=\"page\"><form action=\"logint.php\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Try Again\" /></form></td></tr></table></body></html>");
}

$char1=$row['char1'];
$char2=$row['char2'];
$char3=$row['char3'];
$char4=$row['char4'];
$char5=$row['char5'];
$char6=$row['char6'];
}

?>