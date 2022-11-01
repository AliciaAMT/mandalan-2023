<?php


$ring=0;
$query=sprintf("select * from inventory where equip>0 and username='%s';", mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{

if ($row['equiplocation']=="Finger")
{
$ring=$ring+$row['equip'];
}

}
?>