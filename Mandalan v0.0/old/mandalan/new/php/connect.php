<?php
$con = mysql_connect("mandalantales.db.3947534.hostedresource.com","mandalantales","Abc123game");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("mandalantales", $con);

?>
