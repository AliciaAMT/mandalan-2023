<?php


$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
  {
$report="<span class=\"green\">You use an item!</span><br />";

include ('php/endturn.php');
}
?>
