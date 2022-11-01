<?php
$name=strip_tags($_POST["name"]);
setcookie ("name", $name);
$password=strip_tags($_POST["password"]);
setcookie ("password", $password);
?>

