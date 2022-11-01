<?php
include ('php/enemyevade.php');
include ('php/enemyblock.php');
include ('php/enemydeadt.php');
include ('php/deadt.php');
$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
  {
$report="<span class=\"green\">You drank water and healed!</span><br />";
include ('php/countert.php');
$report=$report.$counter;
$query = sprintf("update stats set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
}
?>
