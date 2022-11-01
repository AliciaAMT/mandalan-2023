<?php
$con = mysql_connect("tayloramt.db.3947534.hostedresource.com","tayloramt","Abc123game");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("tayloramt", $con);

?>
