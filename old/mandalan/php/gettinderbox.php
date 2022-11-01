<?php

$query = sprintf("select * from inventory where username='%s' and itemname='Tinderbox';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  $tinderbox=$row['keep'];
}
?>