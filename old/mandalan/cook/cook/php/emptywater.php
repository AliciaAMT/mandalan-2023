<?php 
include ('../php/connect.php');
include ('../php/getcookie.php');
$drink=strip_tags($_GET["drink"]);

$query=sprintf("update inventory set waterunits=waterunits-1 where username='%s' and itemnumber='%s';", mysql_real_escape_string($username),
mysql_real_escape_string($drink));
  mysql_query ($query, $con);
  
?>