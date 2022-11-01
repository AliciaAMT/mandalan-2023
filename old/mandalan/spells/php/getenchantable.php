<?php
include ('../php/connect.php');
include ('../php/getcookie.php');
$enchantables=0;
//search inventory for enchantable items
$query=sprintf("select * from inventory where username='%s' and keep>0;",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{
if ($row['enchantment1']=="Empty")
{
$enchantables=$encahntables+1;
}
if ($row['enchantment2']=="Empty")
{
$enchantables=$encahntables+1;
}
if ($row['enchantment3']=="Empty")
{
$enchantables=$encahntables+1;
}
}
?>


