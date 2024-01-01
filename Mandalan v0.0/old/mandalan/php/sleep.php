<?php
include ('php/connect.php');
include ('php/getcookie.php');

include ('php/getcondition.php');
//write plague consequence, only speep in bed cures, cannot camp or drink water to heal

$query=sprintf("update stats set life=maxlife where username='%s';", mysql_real_escape_string($username));

mysql_query($query);

$query=sprintf("update stats set mana=maxmana where username='%s';", mysql_real_escape_string($username));

mysql_query($query);

$query=sprintf("update stats set savemap=map where username='%s';", mysql_real_escape_string($username));

mysql_query($query);

$query=sprintf("update stats set savemapdimensions=mapdimensions where username='%s';", mysql_real_escape_string($username));

mysql_query($query);

$query=sprintf("update stats set savexaxis=xaxis where username='%s';", mysql_real_escape_string($username));

mysql_query($query);

$query=sprintf("update stats set saveyaxis=yaxis where username='%s';", mysql_real_escape_string($username));

mysql_query($query);

if ($condition=="Plagued")
{

$query=sprintf("update stats set cond='Good' where username='%s';", mysql_real_escape_string($username));

mysql_query($query);


}


?>
