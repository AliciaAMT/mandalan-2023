<?php
$query = sprintf("select maxmana from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  $maxmana=$row['maxmana'];
  $maxmana=$maxmana+$bmana;
  echo $maxmana;
  }
?>