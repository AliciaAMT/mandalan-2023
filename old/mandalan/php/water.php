<?php
$water=0;
$query = sprintf("select * from inventory where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  $water=$water+$row['waterunits'];
  
  }
  ?>
  