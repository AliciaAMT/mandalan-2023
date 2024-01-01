<?php
include ('../php/connect.php');
include ('../php/getcookie.php');

$query=sprintf("select * from skills where username='%s';", mysql_real_escape_string($username));

$result=mysql_query($query);

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	$sdcritical=$row['sdcritical'];
	$sdresist=$row['sdresist'];
	$sdvampire=$row['sdvampire'];
	$sdeye=$row['sdeye'];
	}
?>