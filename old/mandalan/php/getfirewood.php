<?php

$query = sprintf("select * from inventory where username='%s' and itemname='Firewood';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  $firewood=$row['keep'];
}
?>