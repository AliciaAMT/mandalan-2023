<?php

include ('php/connect.php');

$query=sprintf("update accounts set paid=1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

echo "<table class=\"page\"><tr><td class=\"page\"><br /><br />Thank you for supporting Mandalan Tales!<br />
<table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table></td></tr></table></body></html>";

?>