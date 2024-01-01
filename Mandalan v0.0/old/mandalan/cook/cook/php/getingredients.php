<?php

$query=sprintf("select * from inventory where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))

{

if ($row['itemname']=="Iron Skillet")
{
$skillet=$row['keep'];
}

if ($row['itemname']=="Raw Meat")
{
$rawmeat=$row['keep'];
}

if ($row['itemname']=="Fried Meat")
{
$friedmeat=$row['keep'];
}

if ($row['itemname']=="Bread")
{
$bread=$row['keep'];
}

if ($row['itemname']=="Fried Meat Sandwich")
{
$meatsandwich=$row['keep'];
}

}

?>