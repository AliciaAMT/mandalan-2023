<?php

echo "<table class=\"page\"><tr><td class=\"border\">

<table class=\"page\"><tr><td class=\"page\"><h2>Buy Disease Potion Recipe</h2><img src=\"images/diseasepot.png\" /></td></tr><tr><td class=\"page\">
<form action=\"recipesshop.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Back\" /></form></td></tr></table></td></tr></table></body></html>";
$query=sprintf("update cookbook set diseasepot=1 where username='%s';", mysql_real_escape_string($username));
mysql_query ($query);



$query=sprintf("update stats set gold=gold-25 where username='%s';", mysql_real_escape_string($username));
mysql_query ($query);
?>