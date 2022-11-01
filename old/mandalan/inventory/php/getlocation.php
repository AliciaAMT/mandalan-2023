<?php
$equip=strip_tags($_GET["equip"]); 
$query=sprintf("select * from inventory where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{
if ($row['itemnumber']==$equip)
{
$location=$row['equiplocation'];
}
}

?>