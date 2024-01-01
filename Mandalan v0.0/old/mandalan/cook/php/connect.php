<?php
$con = mysql_connect("localhost","anyone","abc123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("illuminata", $con);

?>
