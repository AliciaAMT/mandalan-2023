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
$query=sprintf("update skills set sxcritical=sxcritical+1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
	
$query=sprintf("update stats set skillpoints=skillpoints-1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
}

if ($type=="blocking")
{
$query=sprintf("update skills set sxblocking=sxblocking+1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
	
$query=sprintf("update stats set skillpoints=skillpoints-1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
}
if ($type=="intimidate")
{
$query=sprintf("update skills set sxintimidate=sxintimidate+1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
	
$query=sprintf("update stats set skillpoints=skillpoints-1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
}
if ($type=="bleed")
{
$query=sprintf("update skills set sxbleed=sxbleed+1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
	
$query=sprintf("update stats set skillpoints=skillpoints-1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);
}
}
}	
?>