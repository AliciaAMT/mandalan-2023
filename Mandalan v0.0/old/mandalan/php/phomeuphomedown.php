<?php
include ('php/connect.php');
include ('php/getcookie.php');

$query=sprintf("update stats set map='home' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

?>