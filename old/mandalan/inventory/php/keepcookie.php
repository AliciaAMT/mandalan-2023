<?php
$username=$_COOKIE["username"];

if (!$username)
{
die ("<html><head></head><body>Your session has expired. Please log in <a href=\"../mandala.php\" target=\"_top\">Here</a></body></html>");
}
setcookie ("username", $username);
?>

