<?php

$query = sprintf("select map, xaxis, yaxis from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  $map=$row['map'];
$xaxis=$row['xaxis'];
$yaxis=$row['yaxis'];
}
?>