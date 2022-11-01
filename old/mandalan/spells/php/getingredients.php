<?php
include ('../php/connect.php');
include ('../php/getcookie.php');
include ('php/getfire.php');
$ingredients=0;
//search inventory for enchantable items

$query=sprintf("select * from inventory where username='%s' and keep>0;",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{
if ($spell=="Holy Water 1")
{
$water=0;
$bottle=0;
if ($row['itemname']=="Potion Bottle" and keep>0)
{
$bottle=$bottle+$row['amount'];
}
if ($row['waterunits']>0)
{
$water=$water+$row['waterunits'];
}

}
}
if ($fire>0 and $water>0 and $bottle>0)
{
$ingredients=1;
}
?>


