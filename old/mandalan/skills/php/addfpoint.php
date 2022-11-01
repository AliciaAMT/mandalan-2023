<?php
include ('../php/connect.php');
include ('../php/getcookie.php');
$type=strip_tags($_POST["type"]);

$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{
if ($row['skillpoints']>0)
{
if ($type=="critical")
{
$query=sprintf("update skills set sfcritical=sfcritical+1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
	
$query=sprintf("update stats set skillpoints=skillpoints-1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
}

if ($type=="resist")
{
$query=sprintf("update skills set sfresist=sfresist+1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
	
$query=sprintf("update stats set skillpoints=skillpoints-1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
}
if ($type=="smoke")
{
$query=sprintf("update skills set sfsmoke=sfsmoke+1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
	
$query=sprintf("update stats set skillpoints=skillpoints-1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
}
if ($type=="inferno")
{
$query=sprintf("update skills set sfinferno=sfinferno+1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
	
$query=sprintf("update stats set skillpoints=skillpoints-1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
}
}
}	
?>