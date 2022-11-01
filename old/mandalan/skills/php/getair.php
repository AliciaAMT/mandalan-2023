<?php
include ('../php/connect.php');
include ('../php/getcookie.php');

$query=sprintf("select * from skills where username='%s';", mysql_real_escape_string($username));

$result=mysql_query($query);

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	$slcritical=$row['slcritical'];
	$slresist=$row['slresist'];
	$slstun=$row['slstun'];
	$slrevive=$row['slrevive'];
	}
?>