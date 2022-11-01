<?php
$query = sprintf("select mana from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  $mana=$row['mana'];
  
$mana=$mana+$bmana;
  echo $mana;
  }
?>